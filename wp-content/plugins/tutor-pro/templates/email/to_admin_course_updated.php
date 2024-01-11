<?php
/**
 * E-mail template for admin when a course is updated.
 *
 * @package TutorPro
 * @subpackage Templates\Email
 *
 * @since 2.0.0
 */

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
	<?php require TUTOR_EMAIL()->path . 'views/email_styles.php'; ?>
</head>

<body>
	<div class="tutor-email-body">
		<div class="tutor-email-wrapper" style="background-color: #fff;">
			<?php require TUTOR_PRO()->path . 'templates/email/email_header.php'; ?>
			<div class="tutor-email-content">
				<?php require TUTOR_PRO()->path . 'templates/email/email_heading_content.php'; ?>

				<table class="tutor-email-datatable">
					<tr>
						<td class="label"><?php esc_html_e( 'Course Name:', 'tutor-pro' ); ?></td>
						<td><strong>{course_name}</strong></td>
					</tr>
				</table>
				<div class="tutor-email-buttons">
					<a target="_blank" class="tutor-email-button" href="{course_url}" data-source="email-btn-url"><?php esc_html_e( 'See Course', 'tutor-pro' ); ?></a>
				</div>

			</div>

			<?php require TUTOR_PRO()->path . 'templates/email/email_footer.php'; ?>
		</div>
	</div>
</body>
</html>
