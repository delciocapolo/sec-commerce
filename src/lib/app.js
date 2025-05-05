function HandleHeader() {
   const headerApp = document.getElementById("header-app");
   const headerHomepage = document.getElementById("header-homepage");

   if (!headerApp || !headerHomepage) return;

   const checkHeaders = () => {
      const headerHomepageHeight = headerHomepage.offsetHeight;
      const topWindow = window.pageYOffset;

      if (topWindow > headerHomepageHeight) headerApp.setAttribute("aria-checked", "true");
      else headerApp.setAttribute("aria-checked", "false");
   };

   document.addEventListener("scroll", checkHeaders);
}

function formatAOAText() {
   /**
    * 
    * @param {number} valor 
    * @returns string
    */
   function formatToKwanza(valor) {
      return valor.toLocaleString("pt-AO", {
         style: "currency",
         currency: "AOA",
         minimumFractionDigits: 2,
         maximumFractionDigits: 2
      });
   }

   document.addEventListener("DOMContentLoaded", (event) => {
      const all = event.target.querySelectorAll(".aoa-format");
      all.forEach((el) => {
         if (el) {
            const value = el.textContent;
            el.textContent = formatToKwanza(Number(value));
         }
      });
   });
}

HandleHeader();
formatAOAText();
