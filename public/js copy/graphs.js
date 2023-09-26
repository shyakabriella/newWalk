

class graphs{
    constructor(colorClass_Name){
        var main_div = document.createElement("div");
        var header = document.createElement("div");
        var body_ = document.createElement("div");
        this.id = makeid(20);
        var colorClass = document.createElement("div");
        $(colorClass)
            .addClass(`bg-gradient-${colorClass_Name}`)
            .addClass(`shadow-${colorClass_Name}`)
            .addClass("border-radius-lg py-3 pe-1")
            .append(this.createConvas());
        $(header).addClass("card-header p-0 position-relative mt-n4 mx-3 z-index-2");
        this.main = function(bootstr,Cclass){
            $(main_div).addClass(bootstr).addClass(Cclass);
            return this;
        }
        this.head = function(Cclass = ""){
            $(header)
                .addClass("card-header")
                .addClass(Cclass)
                .append(colorClass);
            return this;
        }
        this.body = function(title,subtitle,updated){
            var title_ = document.createElement("h6");
            var subtitle_ = document.createElement("p");
            var hr = document.createElement("hr");
            var icon = document.createElement("i");
            var footer = document.createElement("div");
            var updated_ = document.createElement("p");
            $(title_).addClass("mb-0").html(title);
            $(subtitle_).addClass("text-sm").html(subtitle);
            $(hr).addClass("dark horizontal");
            $(icon).addClass("fa fa-clock-o");
            $(updated_).addClass("mb-0 text-sm").html(updated);
            $(footer).addClass("d-flex").append(icon).append(updated_);
            $(body_).addClass("card-body").append(title_).append(subtitle_).append(hr).append(footer);
            return this;
        }
        this.render = function(id){
           var card = document.createElement("div");
           $(card).addClass("card z-index-2").append(header).append(body_);
           $(main_div).append(card);
           $(id).append(main_div);
           return this;
        }
    }
    createConvas(height = 170){
      var theDiv = document.createElement("div");
      var theConvas = document.createElement("canvas");
      $(theConvas).attr("id",this.id).addClass("chart-canvas").attr("height",height);
      $(theDiv).addClass("chart").append(theConvas);
      return theDiv;
    }
    lines(x,y){
       lines(this.id,x,y);
       return this;
    }
    bars(x,y){
       bars(this.id,x,y);
       return this;
    }
}
function lines(id,x,y){

      console.log(id);
      var ctx = document.getElementById(id).getContext("2d");

      new Chart(ctx, {
      type: "line",
      data: {
      labels:x,
      datasets: [{
      label: "Registration",
      tension: 0.4,
      borderWidth: 0,
      borderRadius: 4,
      borderSkipped: false,
      backgroundColor: "transparent",
      data:y,
      maxBarThickness: 6,
      tension: 0,
      pointBackgroundColor: "rgba(255, 255, 255, .8)",
      pointBorderColor: "transparent",
      borderColor: "rgba(255, 255, 255, .8)",
      borderWidth: 4,
      fill: true,
      }, ],
      },
      options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
      legend: {
      display: false,
      }
      },
      interaction: {
      intersect: false,
      mode: 'index',
      },
      scales: {
      y: {
      grid: {
        drawBorder: false,
        display: true,
        drawOnChartArea: true,
        drawTicks: false,
        borderDash: [5, 5],
        color: 'rgba(255, 255, 255, .2)'
      },
      ticks: {
        suggestedMin: 0,
        suggestedMax: 500,
        beginAtZero: true,
        padding: 10,
        font: {
          size: 14,
          weight: 300,
          family: "Roboto",
          style: 'normal',
          lineHeight: 2
        },
        color: "#fff"
      },
      },
      x: {
      grid: {
        drawBorder: false,
        display: true,
        drawOnChartArea: true,
        drawTicks: false,
        borderDash: [5, 5],
        color: 'rgba(255, 255, 255, .2)'
      },
      ticks: {
        display: true,
        color: '#f8f9fa',
        padding: 10,
        font: {
          size: 14,
          weight: 300,
          family: "Roboto",
          style: 'normal',
          lineHeight: 2
        },
      }
      },
      },
      },
      });
}
function bars(id,x,y){
    var ctx2 = document.getElementById(id).getContext("2d");

    new Chart(ctx2, {
    type: "bar",
    data: {
        labels: x,
        datasets: [{
        label: "Clubs",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: y,
        maxBarThickness: 6

        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false,
        }
        },
        interaction: {
        intersect: false,
        mode: 'index',
        },
        scales: {
        y: {
            grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
            },
            }
        },
        x: {
            grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
            },
            ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
            },
            }
        },
        },
    },
    });
}