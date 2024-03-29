<?php
/**
 * BP Nouveau Invites main template.
 *
 * This template is used to inject the BuddyPress Backbone views
 * dealing with invites.
 *
 * @since 3.0.0
 * @version 6.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * - Move title in subnav
 * -
 */
?>

<?php if ( bp_is_group_create() ) : ?>
	<h3 class="bp-screen-title creation-step-name">
		<?php esc_html_e( 'Invite Members', 'unicamp' ); ?>
	</h3>
<?php endif; ?>

<div id="group-invites-container">

	<div class="subnav-wrap">
	<?php if ( ! bp_is_group_create() ) : ?>
		<h2 class="bp-screen-title">
			<?php esc_html_e( 'Invite Members', 'unicamp' ); ?>
		</h2>
	<?php endif; ?>
	<nav class="<?php bp_nouveau_single_item_subnav_classes(); ?>" id="subnav" role="navigation" aria-label="<?php esc_attr_e( 'Group invitations menu', 'unicamp' ); ?>">
	</nav>
	</div>

	<div class="group-invites-column">
		<div class="subnav-filters group-subnav-filters bp-invites-filters"></div>
		<div class="bp-invites-feedback"></div>
		<div class="members bp-invites-content"></div>
	</div>
</div>

<script type="text/html" id="tmpl-bp-group-invites-feedback">
	<div class="bp-feedback {{data.type}}">
		<span class="bp-icon" aria-hidden="true"></span>
		<p>{{{data.message}}}</p>
	</div>
</script>

<script type="text/html" id="tmpl-bp-invites-nav">
	<a href="{{data.href}}" class="bp-invites-nav-item" data-nav="{{data.id}}">{{data.name}}</a>
</script>

<script type="text/html" id="tmpl-bp-invites-users">
	<div class="item-avatar">
		<img src="{{data.avatar}}" class="avatar" alt="Avatar">
	</div>

	<div class="item">
		<div class="list-title member-name">
			{{data.name}}
		</div>

		<# if ( undefined !== data.is_sent ) { #>
			<div class="item-meta">

				<# if ( undefined !== data.invited_by ) { #>
					<ul class="group-inviters">
						<li><?php esc_html_e( 'Invited by:', 'unicamp' ); ?></li>
						<# for ( i in data.invited_by ) { #>
							<li><a href="{{data.invited_by[i].user_link}}" class="bp-tooltip" data-bp-tooltip="{{data.invited_by[i].user_name}}"><img src="{{data.invited_by[i].avatar}}" width="30px" class="avatar mini" alt="{{data.invited_by[i].user_name}}"></a></li>
						<# } #>
					</ul>
				<# } #>

				<p class="status">
					<# if ( false === data.is_sent ) { #>
						<?php esc_html_e( 'The invite has not been sent yet.', 'unicamp' ); ?>
					<# } else { #>
						<?php esc_html_e( 'The invite has been sent.', 'unicamp' ); ?>
					<# } #>
				</p>

			</div>
		<# } #>
	</div>

	<div class="action">
		<# if ( undefined === data.is_sent || ( false === data.is_sent && true === data.can_edit ) ) { #>
			<button type="button" class="button invite-button group-add-remove-invite-button hint--bounce hint--top hint--primary bp-icons<# if ( data.selected ) { #> selected<# } #>" aria-label="<# if ( data.selected ) { #><?php esc_attr_e( 'Cancel invitation', 'unicamp' ); ?><# } else { #><?php echo esc_attr_x( 'Invite', 'button', 'unicamp' ); ?><# } #>">
				<span class="icons" aria-hidden="true"></span>
				<span class="bp-screen-reader-text">
					<# if ( data.selected ) { #>
						<?php echo esc_html_x( 'Cancel invitation', 'button', 'unicamp' ); ?>
					<# } else { #>
						<?php echo esc_html_x( 'Invite', 'button', 'unicamp' ); ?>
					<# } #>
				</span>
			</button>
		<# } #>

		<# if ( undefined !== data.can_edit && true === data.can_edit ) { #>
			<button type="button" class="button invite-button group-remove-invite-button hint--bounce hint--top hint--primary bp-icons" aria-label="<?php echo esc_attr_x( 'Cancel invitation', 'button', 'unicamp' ); ?>">
				<span class=" icons" aria-hidden="true"></span>
				<span class="bp-screen-reader-text"><?php echo esc_attr_x( 'Cancel invitation', 'button', 'unicamp' ); ?></span>
			</button>
		<# } #>
	</div>

</script>

<script type="text/html" id="tmpl-bp-invites-selection">
	<a href="#uninvite-user-{{data.id}}" class="hint--bounce hint--top hint--primary" data-bp-tooltip="{{data.uninviteTooltip}}" aria-label="{{data.uninviteTooltip}}">
		<img src="{{data.avatar}}" class="avatar" alt="Avatar"/>
	</a>
</script>

<script type="text/html" id="tmpl-bp-invites-form">

	<label for="send-invites-control"><?php esc_html_e( 'Optional: add a message to your invite.', 'unicamp' ); ?></label>
	<textarea id="send-invites-control" class="bp-faux-placeholder-label"></textarea>

	<div class="action">
		<button type="button" id="bp-invites-reset" class="button bp-secondary-action"><?php echo esc_html_x( 'Cancel', 'button', 'unicamp' ); ?></button>
		<button type="button" id="bp-invites-send" class="button bp-primary-action"><?php echo esc_html_x( 'Send', 'button', 'unicamp' ); ?></button>
	</div>
</script>

<script type="text/html" id="tmpl-bp-invites-filters">
	<div class="group-invites-search subnav-search clearfix" role="search" >
		<div class="bp-search">
			<form action="" method="get" id="group_invites_search_form" class="bp-invites-search-form" data-bp-search="{{data.scope}}">
				<label for="group_invites_search" class="bp-screen-reader-text"><?php bp_nouveau_search_default_text( _x( 'Search Members', 'heading', 'unicamp' ), false ); ?></label>
				<input type="search" id="group_invites_search" placeholder="<?php echo esc_attr_x( 'Search', 'search placeholder text', 'unicamp' ); ?>"/>

				<button type="submit" id="group_invites_search_submit" class="nouveau-search-submit">
					<span class="dashicons dashicons-search" aria-hidden="true"></span>
					<span id="button-text" class="bp-screen-reader-text"><?php echo esc_html_x( 'Search', 'button', 'unicamp' ); ?></span>
				</button>
			</form>
		</div>
	</div>
</script>

<script type="text/html" id="tmpl-bp-invites-paginate">
	<# if ( 1 !== data.page ) { #>
		<a href="#previous-page" id="bp-invites-prev-page" class="button invite-button bp-tooltip" data-bp-tooltip="<?php echo esc_attr_x( 'Previous page', 'link', 'unicamp' ); ?>">
			<span class="dashicons dashicons-arrow-left" aria-hidden="true"></span>
			<span class="bp-screen-reader-text"><?php echo esc_html_x( 'Previous page', 'link', 'unicamp' ); ?></span>
		</a>
	<# } #>

	<# if ( data.total_page !== data.page ) { #>
		<a href="#next-page" id="bp-invites-next-page" class="button invite-button bp-tooltip" data-bp-tooltip="<?php echo esc_attr_x( 'Next page', 'link', 'unicamp' ); ?>">
			<span class="bp-screen-reader-text"><?php echo esc_html_x( 'Next page', 'link', 'unicamp' ); ?></span>
			<span class="dashicons dashicons-arrow-right" aria-hidden="true"></span>
		</a>
	<# } #>
</script>
