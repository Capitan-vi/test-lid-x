<?php 
/*

Template name: Аудит

*/
?>
<?php get_header(); ?>

	<main>

		<!-- Аудит промо -->
		<?php include 'blocks/audit-promo/audit-promo.php'; ?>

		<!-- Что мы проверяем в аудите? -->
		<?php include 'blocks/audit-process/audit-process.php'; ?>

		<!-- Примеры аудита -->
		<?php include 'blocks/audit-examples/audit-examples.php'; ?>

    <!-- Варианты аудита -->
    <?php include 'blocks/audit-variants/audit-variants.php'; ?>

		<!-- Закажите аудит -->
		<?php include 'blocks/audit-order/audit-order.php'; ?>

	</main>

<?php get_footer(); ?>