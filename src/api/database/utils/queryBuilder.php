<?php

class QueryBuilder
{
   private string $table;
   private string $query = '';
   private array $bindings = [];

   public function __construct(private \PDO $connection) {}

   public function get(): array
   {
      $statement_query = $this->connection->prepare($this->query);
      $statement_query->execute($this->bindings);
      return $statement_query->fetchAll(\PDO::FETCH_ASSOC);
   }

   public function execute(): bool
   {
      $statement_query = $this->connection->prepare($this->query);
      return $statement_query->execute($this->bindings);
   }

   public function table(string $name): self
   {
      $this->table = $name;
      return $this;
   }

   public function select(array $column = ['*']): self
   {
      $columns = implode(', ', $column);
      $this->query = sprintf("SELECT %s FROM %s", $columns, $this->table);
      return $this;
   }

   public function where(string $column, string $operator, mixed $value): self
   {
      $placeholder = ':' . $column;
      $this->query .= sprintf((str_contains($this->query, 'WHERE') ? " AND" : " WHERE") . " %s %s %s", $column, $operator, $placeholder);
      $this->bindings[$placeholder] = $value;
      return $this;
   }

   public function insert(array $data): bool
   {
      $columns = implode(', ', array_keys($data));
      $dot_keys = array_map(fn($col) => ":$col", array_keys($data));
      $placeholders = implode(', ', $dot_keys);
      $this->query = sprintf("INSERT INTO %s (%s) VALUES (%s)", $this->table, $columns, $placeholders);
      $this->bindings = array_combine($dot_keys, array_values($data));
      return $this->execute();
   }

   public function delete(): self
   {
      $this->query = sprintf("DELETE FROM %s", $this->table);
      return $this;
   }

   public function join(string $table, string $column1, string $operator, string $column2): static
   {
      $this->query .= sprintf(" JOIN %s ON %s %s %s", $table, $column1, $operator, $column2);
      return $this;
   }

   public function limit(int $count): static
   {
      $this->query .= sprintf(" LIMIT %d", $count);
      return $this;
   }
}
