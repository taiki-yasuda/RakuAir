<div class="result-top">
<div class="grah">
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countcoldmen ?>],
        ['Hot',     <?php echo $counthotmen ?>],
        ['Comfortable',     <?php echo $countcommen ?>]
        
     
       
]);
var options = { //オプションの指定
         title: 'Men Type',
        'backgroundColor': {'fill':'#fffef4'},
        width: 500,
         height: 300,
};
var chart = new google.visualization.PieChart(document.getElementById('hotmenpiechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="hotmenpiechart"></div>

</div>
</div>