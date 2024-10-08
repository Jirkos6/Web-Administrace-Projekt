<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:white !important;">
          <br> Vítej uživateli {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div role="alert" class="alert">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
  <span  style="color:white !important;">Počet registrovaných uživatelů je {{ $data }}</span>
</div> <br> <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <div class="flex flex-col items-center justify-center min-h-screen">
            
            <canvas id="myChart"></canvas>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Cyklisti', 'Týmy', 'Cyklisti za všechny roky'],
        datasets: [{
            label: 'Počet řádků v tabulce',
            data: [{{ $riderCount }}, {{ $teamCount }}, {{ $riderCountTotal }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</div>

            </div>
        </div>
    </div>
</x-app-layout>