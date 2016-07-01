<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['FP_events'] = array(
    'table' => 'fp_events',
    'audited' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'duration_hours' =>
            array(
                'name' => 'duration_hours',
                'vname' => 'LBL_DURATION_HOURS',
                'type' => 'int',
                'group' => 'duration',
                'len' => '3',
                'comment' => 'Duration (hours)',
                'importable' => 'required',
                'required' => true,
            ),
        'duration_minutes' =>
            array(
                'name' => 'duration_minutes',
                'vname' => 'LBL_DURATION_MINUTES',
                'type' => 'int',
                'group' => 'duration',
                'len' => '2',
                'comment' => 'Duration (minutes)',
            ),
        'date_start' =>
            array(
                'name' => 'date_start',
                'vname' => 'LBL_DATE',
                'type' => 'datetimecombo',
                'dbType' => 'datetime',
                'comment' => 'Date of start of meeting',
                'importable' => 'required',
                'required' => true,
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
                'display_default' => 'now&12:45pm',
                'validation' => array('type' => 'isbefore', 'compareto' => 'date_end', 'blank' => false),
            ),

        'date_end' =>
            array(
                'name' => 'date_end',
                'vname' => 'LBL_DATE_END',
                'type' => 'datetimecombo',
                'dbType' => 'datetime',
                'massupdate' => false,
                'comment' => 'Date meeting ends',
                'enable_range_search' => true,
                'display_default' => 'now&01:45pm',
                'options' => 'date_range_search_dom',
            ),
        'link' =>
            array(
                'name' => 'link',
                'vname' => 'LBL_RESPONSE_LINK',
                'type' => 'varchar',
                'source' => 'non-db',
                'reportable' => true,
            ),
        'link_declined' =>
            array(
                'name' => 'link_declined',
                'vname' => 'LBL_RESPONSE_LINK_DECLINED',
                'type' => 'varchar',
                'source' => 'non-db',
                'reportable' => true,
            ),
        'budget' =>
            array(
                'required' => false,
                'name' => 'budget',
                'vname' => 'LBL_BUDGET',
                'type' => 'currency',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 26,
                'size' => '20',
                'enable_range_search' => false,
                'precision' => 6,
            ),
        'currency_id' =>
            array(
                'required' => false,
                'name' => 'currency_id',
                'vname' => 'LBL_CURRENCY',
                'type' => 'currency_id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
                'dbType' => 'id',
                'studio' => 'visible',
                'function' =>
                    array(
                        'name' => 'getCurrencyDropDown',
                        'returns' => 'html',
                    ),
            ),
        'duration' =>
            array(
                'name' => 'duration',
                'vname' => 'LBL_DURATION',
                'type' => 'enum',
                'options' => 'duration_dom',
                'source' => 'non-db',
                'comment' => 'Duration handler dropdown',
                'massupdate' => false,
                'reportable' => false,
                'importable' => false,
            ),
        'invite_templates' =>
            array(
                'required' => false,
                'name' => 'invite_templates',
                'vname' => 'LBL_INVITE_TEMPLATES',
                'type' => 'enum',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'email_templet_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'accept_redirect' =>
            array(
                'name' => 'accept_redirect',
                'vname' => 'LBL_ACCEPT_REDIRECT',
                'type' => 'url',
                'massupdate' => '0',
                'default' => '',
                'no_default' => false,
                'comments' => 'Insert a URL to a web page here.',
                'help' => 'Insert the URL for the page that you want the event delegates to see when they accept the invitation from the email.',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'dbType' => 'varchar',
                'gen' => '0',
                'link_target' => '_blank',
                'id' => 'FP_eventsaccept_redirect',
            ),
        'decline_redirect' =>
            array(
                'required' => false,
                'name' => 'decline_redirect',
                'vname' => 'LBL_DECLINE_REDIRECT',
                'type' => 'url',
                'massupdate' => '0',
                'default' => NULL,
                'no_default' => false,
                'comments' => 'Insert a URL to a web page here.',
                'help' => 'Insert the URL for the page that you want the event delegates to see when they have declined the invitation from the email.',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'dbType' => 'varchar',
                'gen' => NULL,
                'link_target' => '_blank',
                'id' => 'FP_eventsdecline_redirect',
            ),
        'fp_events_contacts' =>
            array(
                'name' => 'fp_events_contacts',
                'type' => 'link',
                'relationship' => 'fp_events_contacts',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE',
            ),
        'e_invite_status_fields' =>
            array (
                'name' => 'e_invite_status_fields',
                'rname' => 'id',
                'relationship_fields'=>array('id' => 'event_invite_id', 'invite_status' => 'event_status_name', 'accept_status' => 'event_accept_status'),
                'vname' => 'LBL_CONT_INVITE_STATUS',
                'type' => 'relate',
                'link' => 'fp_events_contacts',
                'link_type' => 'relationship_info',
                'join_link_name' => 'fp_events_contacts_c',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge'=> 'disabled',
                'studio' => false,
                'join_primary' => false,
            ),
        'event_status_name' =>
            array(
                'name' => 'event_status_name',
                'type' => 'enum',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
                'options' => 'fp_event_invite_status_dom',
            ),
        'event_invite_id' =>
            array(
                'name' => 'event_invite_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS',
                'studio' => array('listview' => false),
            ),

        'event_accept_status' =>
            array(
                'massupdate' => false,
                'name' => 'event_accept_status',
                'type' => 'enum',
                'studio' => 'false',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
                'options' => 'fp_event_status_dom',
                'importable' => 'false',
            ),
        'fp_events_prospects_1' =>
            array(
                'name' => 'fp_events_prospects_1',
                'type' => 'link',
                'relationship' => 'fp_events_prospects_1',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
            ),
        'e_prospects_invite_status_fields' =>
            array (
                'name' => 'e_prospects_invite_status_fields',
                'rname' => 'id',
                'relationship_fields'=>array('id' => 'event_prospect_invite_id', 'invite_status' => 'event_prospect_status_name', 'accept_status' => 'event_prospect_accept_status'),
                'vname' => 'LBL_CONT_INVITE_STATUS',
                'type' => 'relate',
                'link' => 'fp_events_prospects_1',
                'link_type' => 'relationship_info',
                'join_link_name' => 'fp_events_prospects_1_c',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge'=> 'disabled',
                'studio' => false,
                'join_primary' => false,
            ),

        'event_prospect_status_name' =>
            array(
                'name' => 'event_prospect_status_name',
                'type' => 'enum',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
                'options' => 'fp_event_invite_status_dom',
            ),
        'event_prospect_invite_id' =>
            array(
                'name' => 'event_prospect_invite_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS',
                'studio' => array('listview' => false),
            ),

        'event_prospect_accept_status' =>
            array(
                'massupdate' => false,
                'name' => 'event_prospect_accept_status',
                'type' => 'enum',
                'studio' => 'false',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
                'options' => 'fp_event_status_dom',
                'importable' => 'false',
            ),

        'fp_events_leads_1' =>
            array(
                'name' => 'fp_events_leads_1',
                'type' => 'link',
                'relationship' => 'fp_events_leads_1',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE',
            ),
        'e_leads_invite_status_fields' =>
            array (
                'name' => 'e_leads_invite_status_fields',
                'rname' => 'id',
                'relationship_fields'=>array('id' => 'event_lead_invite_id', 'invite_status' => 'event_lead_status_name', 'accept_status' => 'event_lead_accept_status'),
                'vname' => 'LBL_CONT_INVITE_STATUS',
                'type' => 'relate',
                'link' => 'fp_events_leads_1',
                'link_type' => 'relationship_info',
                'join_link_name' => 'fp_events_leads_1_c',
                'source' => 'non-db',
                'importable' => 'false',
                'duplicate_merge'=> 'disabled',
                'studio' => false,
                'join_primary' => false,
            ),

        'event_lead_status_name' =>
            array(
                'name' => 'event_lead_status_name',
                'type' => 'enum',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
                'options' => 'fp_event_invite_status_dom',
            ),
        'event_lead_invite_id' =>
            array(
                'name' => 'event_lead_invite_id',
                'type' => 'varchar',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_INVITE_STATUS',
                'studio' => array('listview' => false),
            ),

        'event_lead_accept_status' =>
            array(
                'massupdate' => false,
                'name' => 'event_lead_accept_status',
                'type' => 'enum',
                'studio' => 'false',
                'source' => 'non-db',
                'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
                'options' => 'fp_event_status_dom',
                'importable' => 'false',
            ),

        'fp_event_locations_fp_events_1' =>
            array(
                'name' => 'fp_event_locations_fp_events_1',
                'type' => 'link',
                'relationship' => 'fp_event_locations_fp_events_1',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
                'id_name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
            ),
        'fp_event_locations_fp_events_1_name' =>
            array(
                'name' => 'fp_event_locations_fp_events_1_name',
                'type' => 'relate',
                'source' => 'non-db',
                'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
                'save' => true,
                'id_name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
                'link' => 'fp_event_locations_fp_events_1',
                'table' => 'fp_event_locations',
                'module' => 'FP_Event_Locations',
                'rname' => 'name',
            ),
        'fp_event_locations_fp_events_1fp_event_locations_ida' =>
            array(
                'name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
                'type' => 'link',
                'relationship' => 'fp_event_locations_fp_events_1',
                'source' => 'non-db',
                'reportable' => false,
                'side' => 'right',
                'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
            ),
        'nb_invites' => array (
            'name' => 'nb_invites',
            'vname' => 'LBL_NB_INVITES',
            'type' => 'int',
            'function' => array('name'=>'nb_invites', 'returns'=>'html', 'include'=>'modules/FP_events/CalculatedFields.php'),
            'source' => 'non-db',
            'len' => '6',
        ),
        'nb_accept' => array (
            'name' => 'nb_accept',
            'vname' => 'LBL_NB_ACCEPT',
            'type' => 'int',
            'function' => array('name'=>'nb_accept', 'returns'=>'html', 'include'=>'modules/FP_events/CalculatedFields.php'),
            'source' => 'non-db',
            'len' => '6',
        ),
        'nb_declined' => array (
            'name' => 'nb_declined',
            'vname' => 'LBL_NB_DECLINED',
            'type' => 'int',
            'function' => array('name'=>'nb_declined', 'returns'=>'html', 'include'=>'modules/FP_events/CalculatedFields.php'),
            'source' => 'non-db',
        ),
        'nb_attended' => array (
            'name' => 'nb_attended',
            'vname' => 'LBL_NB_ATTENDED',
            'type' => 'int',
            'function' => array('name'=>'nb_attended', 'returns'=>'html', 'include'=>'modules/FP_events/CalculatedFields.php'),
            'source' => 'non-db',
            'len' => '6',
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('FP_events', 'FP_events', array('basic', 'assignable', 'security_groups'));
