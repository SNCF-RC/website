<div>


    {{auth()->user()->company()->first()->accountbank()->first()->getmoney()}}
    <div class="col-12 col-xxl-6">
        <div class="row align-items-start justify-content-between mb-4 g-3">
            <div class="col-auto">
                <h3>Ad Clicks</h3>
                <p class="text-body-tertiary lh-sm mb-0">Check effectiveness of your ads</p>
            </div>
            <div class="col-12 col-sm-4">
                <select class="form-select form-select-sm" id="select-ad-clicks-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                </select>
            </div>
        </div>
        </div>


    @script
    <script>
        const chart = new Chart(
            document.getElementById('chart'), {
                type: 'line',
                data: {
                    labels: @json($labels),
                    datasets: @json($dataset)
                },
            }
        );
        console.log(@json($labels))
        Livewire.on('updateChart', data => {
            chart.data = data;
            chart.update();
        });
    </script>
    @endscript
    <div>
        <canvas id="chart"></canvas>
    </div>
</div>
