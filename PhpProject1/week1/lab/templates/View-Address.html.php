<?php if ( count($address) > 0 ) : ?>
<h1>Phones</h1>
<ul>
<?php foreach( $address as $key => $values ) : ?>
    <li><?php echo $values['address']; ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
