{*
/*************************************
 * SPDX-FileCopyrightText: 2009-2020 Vtenext S.r.l. <info@vtenext.com> 
  * SPDX-License-Identifier: AGPL-3.0-only  
 ************************************/
*}
<br>
<br>

<table align="center" cellpadding="5" cellspacing="0" width="95%" class="mailClient importLeadUI small">
    <tr>
        <td height="50" valign="middle" align="left" class="mailClientBg genHeaderSmall">
            {$MODULE|getTranslatedString:$MODULE}
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="padding-left:140px;">
            {$MESSAGE}
            <br><br><br></td>
    </tr>
    <tr>
        <td class="reportCreateBottom">
            <table width="100%" border="0" cellpadding="5" cellspacing="0">
                <tr>
                    <td align="right" width='50%' valign="top">
                        <form enctype="multipart/form-data" name="Import" method="POST" action="index.php"
                              onsubmit="VteJS_DialogBox.block();">
                            <input type="hidden" name="__csrf_token" value="{$CSRF_TOKEN}"> {* crmv@171581 *}
                            <input type="hidden" name="module" value="{$MODULENAME}">
                            <input type="hidden" name="action" id="import_action" value="">
                            <input type="hidden" name="step" value="1">
                            <input type="hidden" name="return_id" value="">
                            <input type="hidden" name="return_module" value="{$RETURN_MODULE}">
                            <input type="hidden" name="return_action" value="{$RETURN_ACTION}">
                            <input type="hidden" name="parenttab" id="parenttab" value="{$PARENTTAB}">
                            <input title="LBL_FINISHED'" accessKey="" class="crmbutton small save" type="submit"
                                   name="button" value="  {$MOD.LBL_FINISHED}  "
                                   onclick="this.form.action.value=this.form.return_action.value;this.form.return_module.value=this.form.return_module.value;return true;">
                        </form>
                    </td>


                    <td align="left" width='50%'>
                        {if $UNDO neq 'yes'}
                            <form name="Import" method="POST" action="index.php">
                                <input type="hidden" name="__csrf_token" value="{$CSRF_TOKEN}"> {* crmv@171581 *}
                                <input type="hidden" name="module" value="{$MODULENAME}">
                                <input type="hidden" name="action" value="iCalImport">
                                <input type="hidden" name="step" value="undo">
                                <input type="hidden" name="return_module" value="{$RETURN_MODULE}">
                                <input type="hidden" name="return_id" value="{$RETURN_ID}">
                                <input type="hidden" name="return_action" value="{$RETURN_ACTION}">
                                <input type="hidden" name="parenttab" value="{$PARENTTAB}">
                                <input title="{$MOD.LBL_UNDO_LAST_IMPORT}" accessKey="" class="crmbutton small cancel"
                                       type="submit" name="button" value="  {$MOD.LBL_UNDO_LAST_IMPORT}  ">
                            </form>
                        {/if}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
