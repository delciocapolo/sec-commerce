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

/**
 * 
 * @param {number} valor 
 * @returns string
 */
function formatAOAText(valor) {
   return valor.toLocaleString("pt-AO", {
      style: "currency",
      currency: "AOA",
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   });
}

HandleHeader();

class Utils {
   static CHART_COLORS = {
      red: 'rgb(255, 99, 132)',
      orange: 'rgb(255, 159, 64)',
      yellow: 'rgb(255, 205, 86)',
      green: 'rgb(75, 192, 192)',
      blue: 'rgb(54, 162, 235)',
      purple: 'rgb(153, 102, 255)',
      grey: 'rgb(201, 203, 207)'
   };

   static valueOrDefault(value, default_) {
      return value ?? default_;
   }

   static rand(min, max) {
      let _seed = Date.now();
      min = Utils.valueOrDefault(min, 0);
      max = Utils.valueOrDefault(max, 0);
      _seed = (_seed * 9301 + 49297) % 233280;
      return min + (_seed / 233280) * (max - min);
   }

   static numbers(config) {
      let cfg = config || {};
      let min = Utils.valueOrDefault(cfg.min, 0);
      let max = Utils.valueOrDefault(cfg.max, 100);
      let from = Utils.valueOrDefault(cfg.from, []);
      let count = Utils.valueOrDefault(cfg.count, 8);
      let decimals = Utils.valueOrDefault(cfg.decimals, 8);
      let continuity = Utils.valueOrDefault(cfg.continuity, 1);
      let dfactor = Math.pow(10, decimals) || 0;
      let data = [];
      let i, value;

      for (i = 0; i < count; ++i) {
         value = (from[i] || 0) + Utils.rand(min, max);

         if (Utils.rand() <= continuity) {
            data.push(Math.round(dfactor * value) / dfactor);
         } else {
            data.push(null);
         }
      }

      return data;
   }

   static months(config) {
      const MONTHS = [
         'January',
         'February',
         'March',
         'April',
         'May',
         'June',
         'July',
         'August',
         'September',
         'October',
         'November',
         'December'
      ];

      var cfg = config || {};
      var count = cfg.count || 12;
      var section = cfg.section;
      var values = [];
      var i, value;

      for (i = 0; i < count; ++i) {
         value = MONTHS[Math.ceil(i) % 12];
         values.push(value.substring(0, section));
      }

      return values;
   }
}

class DashboardPageCharts {
   static constantCharts() {
      const ctx = document.getElementById('xs-dashboard-results');
      const NUMBER_CFG = { count: 7, min: -100, max: 100 };

      const labels = Utils.months({ count: 7 });
      const data = {
         labels: labels,
         datasets: [
            {
               label: 'Dataset 1',
               data: Utils.numbers(NUMBER_CFG),
               borderColor: Utils.CHART_COLORS.red,
            },
            {
               label: 'Dataset 1',
               data: Utils.numbers(NUMBER_CFG),
               borderColor: Utils.CHART_COLORS.red,
            },
         ]
      };

      new Chart(ctx,
         {
            type: 'line',
            data: data,
            options: {
               responsive: true,
               plugins: {
                  legend: {
                     position: 'top',
                  },
                  title: {
                     display: true,
                     text: 'Chart.js Line Chart'
                  }
               }
            }
         }
      )
   }
}

document.addEventListener("DOMContentLoaded", (event) => {
   event.target
      .querySelectorAll(".aoa-format")
      .forEach(current => current ?
         current.textContent = formatAOAText(Number(current.textContent))
         : null
      );

   DashboardPageCharts.constantCharts();
});