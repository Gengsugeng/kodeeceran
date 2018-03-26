<?php
 
error_reporting( E_ALL );
require( 'IbParser.php' );
$parser = new IbParser();
 
?>
 
<pre>
IP Server     : <?php echo $parser->conf['ip']; ?>
 
Tanggal & Jam : <?php echo date( 'Y-m-d H:i:s', $parser->conf['time'] ); ?>
 
Path          : <?php echo $parser->conf['path']; ?>
 
Writable      : <?php echo ( is_writable( $parser->conf['path'] ) )? 'Ya': '<span style="color: #ff0000;">Tidak!</span>'; ?>
 
</pre>

<?php
$bank   = 'BCA';
$user   = 'fatkulam0612';
$pass   = '643685';
 
$balance = $parser->getBalance( $bank, $user, $pass );
 
?>

<pre>
Akun          : <?php echo $bank . ' ' . $user; ?>
 
Saldo         : <?php echo ( !$balance )? 'Gagal mengambil saldo': number_format( $balance, 2 ); ?>
</pre>
 
<?php $transactions = $parser->getTransactions( $bank, $user, $pass ); ?>
<pre>Transaksi     : <?php echo ( !$transactions )? 'Gagal mengambil transaksi': print_r( $transactions, true ); ?></pre>