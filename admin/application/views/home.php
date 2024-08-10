<div class="section-header">
    <h1><?= $titlePage ?></h1>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>ข้อความใหม่ (เดือนปัจจุบัน)</h4>
                </div>
                <div class="card-body">
                    <?= number_format($countNewMessage) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>ข้อความทั้งหมด</h4>
                </div>
                <div class="card-body">
                    <?= number_format($countAllMessage) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>การเข้าชมเว็บไซต์</h4>
                </div>
                <div class="card-body">
                    <?= number_format($countVisitWebSite) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>สถิติการเข้าชมเว็บไซต์</h4>
                <!-- <div class="card-header-action">
          <div class="btn-group">
            <a href="#" class="btn btn-primary">Week</a>
            <a href="#" class="btn">Month</a>
          </div>
        </div> -->
            </div>
            <div class="card-body">
                <canvas id="myChart" height="182"></canvas>
            </div>
        </div>
    </div>

</div>

<script>
    var statistics_chart = document.getElementById("myChart").getContext('2d');

    var myChart = new Chart(statistics_chart, {
        type: 'line',
        data: {
            labels: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค."],
            datasets: [{
                label: 'การเข้าชมเว็บไซต์',
                data: [<?= implode(',', $visitWebSiteGraph) ?>],
                borderWidth: 5,
                borderColor: '#6777ef',
                backgroundColor: 'transparent',
                pointBackgroundColor: '#fff',
                pointBorderColor: '#6777ef',
                pointRadius: 4
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        stepSize: 0
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: '#fbfbfb',
                        lineWidth: 2
                    }
                }]
            },
        }
    });
</script>