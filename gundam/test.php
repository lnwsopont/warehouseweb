<?

$data = [
    0 => [
        'name' => 'A',
        'stock' => 10
    ],
    1 => [
        'name' => 'B',
        'stock' => 50
    ],
    2 => [
        'name' => 'C',
        'stock' => 7
    ]
];

$colors = ['#fa2', '#cf5', '#0af'];

?>
<div style="border: 1px solid #000; width: 500px;">
<?
$i = 0;
$ratio = 4;
foreach($data as $ech){
    echo '<div>';
        echo '<span style="width: 200px;">' . $ech['name'] . '</span>';
        echo '<span style="display:inline-block; height: 50px; width: '.($ech['stock']*$ratio).'px; background: '.$colors[$i].'"></span>';
    echo '</div>';
    $i++;
}
?>
</div>
