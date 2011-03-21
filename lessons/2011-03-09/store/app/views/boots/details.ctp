<?
// colors for boots, returns result as json 
header('Content-type: application/json; charset=utf-8');
echo $colors;
?>
<div>
  <label>Item name:</label> <?= $item.name ?>
</div>
<div>
  <label>SKU:</label> <?= $item.sku ?>
</div>
<div>
  <label>Height:</label> <?= $item.height ?>
</div>
<div>
  <label>Colors:</label> <?= $item.colors ?>
</div>
<div>
  <label>Lining:</label> <?= $item.lining ?>
</div>
<div>
  <label>Today's price:</label> <?= $item.price ?>
</div>
<div>
  <label>Features:</label> <?= $item.features ?>
</div>
<div align="center">
<?
if ($item.sku != '---') {
?>
    <img id="itemPhoto" src="photos/<?= $item.sku ?>.png"/>
<?
}
?>
</div>
