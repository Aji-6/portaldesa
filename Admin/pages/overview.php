<section class="grafik">
    <div>
        <h1>Data Jumlah Fasilitas Dusun</h1>
        <canvas id="chartFasilitas"></canvas>
    </div>
    <div>
        <h1>Data Jumlah Penduduk per Dusun</h1>
        <canvas id="chartPenduduk"></canvas>
    </div>
</section>

<script>
    // CHART JUMLAH PENDUDUK
    let ctx = document.getElementById('chartPenduduk').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php
                        $result = $conn->query("SELECT dusun FROM pkk_data");
                        while ($row = $result->fetch_assoc()) {
                            echo "'" . $row['dusun'] . "',";
                        }
                        ?>],
            datasets: [{
                    label: 'Laki-Laki',
                    data: [<?php
                            $result = $conn->query("SELECT laki_laki AS total FROM pkk_data");
                            while ($row = $result->fetch_assoc()) {
                                echo $row['total'] . ",";
                            }
                            ?>],
                    backgroundColor: '#154001'
                },
                {
                    label: 'Perempuan',
                    data: [<?php
                            $result = $conn->query("SELECT perempuan AS total FROM pkk_data");
                            while ($row = $result->fetch_assoc()) {
                                echo $row['total'] . ",";
                            }
                            ?>],
                    backgroundColor: '#618C20'
                },
            ]
        }
    });
</script>

<!-- CHART FASILITAS -->
<?php
$query = "SELECT fasilitas, jumlah FROM fasilitas_desa";
$result = mysqli_query($conn, $query);

$fasilitas = [];
$jumlah = [];

while ($row = mysqli_fetch_assoc($result)) {
    $fasilitas[] = $row['fasilitas'];
    $jumlah[] = $row['jumlah'];
}

$data_fasilitas = json_encode($fasilitas);
$data_jumlah = json_encode($jumlah);
?>


<script>
    const ctxFasilitas = document.getElementById('chartFasilitas').getContext('2d');
    const chartFasilitas = new Chart(ctxFasilitas, {
        type: 'doughnut',
        data: {
            labels: <?= $data_fasilitas ?>,
            datasets: [{
                label: 'Jumlah Fasilitas',
                data: <?= $data_jumlah ?>,
                backgroundColor: ['#154001', '#618C20', '#67A60A'],
                // borderColor: ['#618C20', '#67A60A', '#154001', '#062601'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                },
                // title: { display: true, text: 'Data Fasilitas Desa' }
            }
        }
    });
</script>