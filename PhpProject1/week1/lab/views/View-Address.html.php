<?php if ( count($address) > 0 ) : ?>
<h1>Addresses</h1>
<?php foreach( $addresses as $key => $values ) : ?>
    <ul>
        <li><?php echo $values['fullname']; ?> </li>
        <li><?php echo $values['email']; ?> </li>
        <li><?php echo $values['addressline1']; ?> </li>
        <li><?php echo $values['city']; ?> </li>
        <li><?php echo $values['state']; ?> </li>
        <li><?php echo $values['zip']; ?> </li>
        <li><?php echo $values['birthday']; ?> </li>
    </ul>
    <hr>
<?php endforeach; ?>

<?php endif; ?>
