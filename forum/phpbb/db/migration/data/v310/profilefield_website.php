<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\db\migration\data\v310;

class profilefield_website extends \phpbb\db\migration\profilefield_base_migration
{
	static public function depends_on()
	{
		return array(
			'\phpbb\db\migration\data\v310\profilefield_on_memberlist',
			'\phpbb\db\migration\data\v310\profilefield_icq_cleanup',
		);
	}

	protected $profilefield_name = 'phpbb_website';

	protected $profilefield_database_type = array('VCHAR', '');

	protected $profilefield_data = array(
		'field_name'			=> 'phpbb_website',
		'field_type'			=> 'profilefields.type.url',
		'field_ident'			=> 'phpbb_website',
		'field_length'			=> '40',
		'field_minlen'			=> '12',
		'field_maxlen'			=> '255',
		'field_novalue'			=> '',
		'field_default_value'	=> '',
		'field_validation'		=> '',
		'field_required'		=> 0,
		'field_show_novalue'	=> 0,
		'field_show_on_reg'		=> 0,
		'field_show_on_pm'		=> 1,
		'field_show_on_vt'		=> 1,
		'field_show_on_ml'		=> 1,
		'field_show_profile'	=> 1,
		'field_hide'			=> 0,
		'field_no_view'			=> 0,
		'field_active'			=> 1,
		'field_is_contact'		=> 1,
		'field_contact_desc'	=> 'VISIT_WEBSITE',
		'field_contact_url'		=> '%s',
	);

	protected $user_column_name = 'user_website';
}
