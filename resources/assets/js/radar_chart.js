const siteRadarChartOptions = {
  legend: {
      display: false,
  },
  animation: {
      duration:0,
      onComplete: function () {
          $.when($("#project-detail-site-radar-chart-loading-text").remove())
          .then(
            //   $("#project-detail-site-radar-chart").show()
          );
      }
  },
  scale: {
      pointLabels: {
          fontFamily:"'A-OTF Folk Pro','Noto Sans JP',sans-serif",
          fontSize: radarfontsize,
          fontColor:radarfontcolor,
      },
      ticks: {
          display: true,
          stepSize: 2,
          max: 10,
          beginAtZero: true,
      },
      angleLines: {
          display: false,
      }
  }
};

const siteRadarChartLabels = {
1: ['売上', '利益', '利益率', 'PV', 'UU', '記事数'],
2: ['売上', '利益', '利益率', 'Follow'],
3: ['売上', '利益', '利益率', 'User']
};
const siteRadarChartBackgroundColor = "rgba(0,91,203,0.6)";

$(function() {
const siteRadarChartCanvas = document.getElementById("project-detail-site-radar-chart");
  new Chart(siteRadarChartCanvas, {
      type: 'radar',
      options: siteRadarChartOptions,
      data: {
          labels: siteRadarChartLabels[1],
          datasets: [{
              backgroundColor: siteRadarChartBackgroundColor,
              pointRadius:0,
            //   data: [1,1,1,1,1,2],
              data: [5, 4, 4, 8, 4, 10],
          }]
      }
  });
});