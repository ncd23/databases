<?
$this->log(print_r($item,true));
?><div>
  <label>Item name:</label> <?= $item['Boot']['name'] ?>
</div>
<div>
  <label>SKU:</label> <?= $item['Boot']['sku'] ?>
</div>
<div>
  <label>Height:</label> <?= $item['Boot']['height'] ?>
</div>
<div>
  <label>Colors:</label> <?= $item['Boot']['colors'] ?>
</div>
<div>
  <label>Lining:</label> <?= $item['Boot']['lining'] ?>
</div>
<div>
  <label>Today's price:</label> <?= $item['Boot']['price'] ?>
</div>
<div>
  <label>Features:</label> <?= $item['Boot']['features'] ?>
</div>
<div align="center">
<?
if ($item.sku != '---') {
?>
    <img id="itemPhoto" src="img/photos/<?= $item['Boot']['sku'] ?>.png"/>
<?
}
?>
</div>
