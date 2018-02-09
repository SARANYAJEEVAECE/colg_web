        <?php 
include_once '../view/header.php'
 ?>
        <div class="form-wrapper"><span class="form-wrapper__heading">Drop us a line</span>
            <div id="crmWebToEntityForm">
                <h2 style="display: none; margin-top: 0px !important; text-align: center;color: #f26e21;" class="enquiry enquiry_cond">DROP US A LINE
</h2>
                <br>
                <form accept-charset="UTF-8" action="https://crm.zoho.com/crm/WebToLeadForm" method="POST" name="WebToLeads339620000004329127" class="form__action">
                    <!-- Do not remove this code. -->
                    <input style="display: none;" name="xnQsjsdp" value="39acb8d29cec25ae80d9044d4222dbeea5fef7caf7b8d4731bdbf3b017bc1c0b" type="text">
                    <input id="zc_gad" name="zc_gad" value="" type="hidden">
                    <input style="display: none;" name="xmIwtLD" value="378cfead3cb3558f82105702003eb3fb0348989e573bf77db1b6a58fe7e5e065" type="text">
                    <input style="display: none;" name="actionType" value="TGVhZHM=" type="text">
                    <input style="display: none;" name="returnURL" value="index.html" type="text">
                    <!-- Do not remove this code. -->
                    <input id="ldeskuid" style="display: none;" name="ldeskuid" type="text">
                    <input id="LDTuvid" style="display: none;" name="LDTuvid" type="text">
                    <!-- Do not remove this code. -->
                    <span class="input input--hoshi form--component">
  
<input id="input-4" name="Last Name" class="blur-focus input__field input__field--hoshi" maxlength="50" required="required" type="text">
  
            <label for="input-4" class="input__label input__label--hoshi input__label--hoshi-color"><span class="input__label-content input__label-content--hoshi">Name *</span></label>
                            </span><span class="input input--hoshi form--component">

<input id="input-4" name="Email" class="blur-focus input__field input__field--hoshi" maxlength="50" required="required" type="text">
            <label for="input-4" class="input__label input__label--hoshi input__label--hoshi-color"><span class="input__label-content input__label-content--hoshi">Email*</span></label>
                            </span><span class="input input--hoshi form--component">


 <input id="input-4" name="Mobile" class="blur-focus input__field input__field--hoshi" maxlength="50" required="required" type="text">
            <label for="input-4" class="input__label input__label--hoshi input__label--hoshi-color"><span class="input__label-content input__label-content--hoshi">Mobile*</span></label>
                            </span><span class="input input--hoshi form--component"> 

<span></span>
                            <textarea id="input-4" type="text" name="Description" class="blur-focus input__field input__field--hoshi" maxlength="1000" required="required"></textarea>
                            <label for="input-4" class="input__label input__label--hoshi input__label--hoshi-color"><span class="input__label-content input__label-content--hoshi">How we can help you? *</span></label>
                            </span><span class="input input--hoshi form--component">
</span><div class="form--component">
                                <input class="button button--orange form__action--send" value="Submit" type="submit">
                            </div><table>
                        <tbody>
                            
                            
                            <tr style="display: none;">
                                <td style="nowrap: nowrap; text-align: left; font-size: 12px; font-family: Arial; width: 50%;">Lead Status</td>
                                <td style="width: 250px;">
                                    <select style="width: 250px;" name="Lead Status">
                                        <option value="-None-">None</option>
                                        <option selected="selected" value="Enquired">Enquired</option>
                                        <option value="Not Reachable">Not Reachable</option>
                                        <option value="WIP">WIP</option>
                                        <option value="Junk Lead">Junk Lead</option>
                                        <option value="Not-Qualified">Not-Qualified</option>
                                        <option value="Closed Lost">Closed (Lost)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="display: none;">
                                <td style="nowrap: nowrap; text-align: left; font-size: 12px; font-family: Arial; width: 50%;">Lead Source</td>
                                <td style="width: 250px;">
                                    <select style="width: 250px;" name="Lead Source">
                                        <option value="-None-">None</option>
                                        <option value="Cold Call">Cold Call</option>
                                        <option value="Web Research">Web Research</option>
                                        <option value="Customer Referral">Customer Referral</option>
                                        <option value="Network Referral">Network Referral</option>
                                        <option selected="selected" value="SEO">SEO</option>
                                        <option value="AdWords">AdWords</option>
                                        <option value="Adwords - Dubai">Adwords - Dubai</option>
                                        <option value="Conferences">Conferences</option>
                                        <option value="TieCon2016">TieCon2016</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="display: none;">
                                <td style="nowrap: nowrap; text-align: left; font-size: 12px; font-family: Arial; width: 50%;">Lead Associate</td>
                                <td style="width: 250px;">
                                    <select style="width: 250px;" name="LEADCF5">
                                        <option value="-None-">-None-</option>
                                        <option value="Anand">Anand</option>
                                        <option value="Divya S">Divya S</option>
                                        <option value="Gengarajan">Gengarajan</option>
                                        <option value="Hari Prasath">Hari Prasath</option>
                                        <option selected="selected" value="Sibi">Sibi</option>
                                        <option value="Uma Shankar">Uma Shankar</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                    // <![CDATA[
                    var mndFileds = new Array('Last Name', 'Mobile', 'Email', 'City');
                    var fldLangVal = new Array('Last Name', 'Mobile', 'Email', 'City');
                    var name = '';
                    var email = '';

                    function checkMandatory() {
                        for (i = 0; i < mndFileds.length; i++) {
                            var fieldObj = document.forms['WebToLeads339620000007191001'][mndFileds[i]];
                            if (fieldObj) {
                                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                    if (fieldObj.type == 'file') {
                                        alert('Please select a file to upload.');
                                        fieldObj.focus();
                                        return false;
                                    }
                                    alert(fldLangVal[i] + ' cannot be empty.');
                                    fieldObj.focus();
                                    return false;
                                } else if (fieldObj.nodeName == 'SELECT') {
                                    if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                        alert(fldLangVal[i] + ' cannot be none.');
                                        fieldObj.focus();
                                        return false;
                                    }
                                } else if (fieldObj.type == 'checkbox') {
                                    if (fieldObj.checked == false) {
                                        alert('Please accept  ' + fldLangVal[i]);
                                        fieldObj.focus();
                                        return false;
                                    }
                                }
                                try {
                                    if (fieldObj.name == 'Last Name') {
                                        name = fieldObj.value;
                                    }
                                } catch (e) {}
                            }
                        }
                        trackVisitor();
                    }
                    // ]]>
                    </script>
                    <script id="VisitorTracking" type="text/javascript">
                    // <![CDATA[
                    var $zoho = $zoho || { salesiq: { values: {}, ready: function() { $zoho.salesiq.floatbutton.visible('hide'); } } };
                    var d = document;
                    s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.defer = true;
                    s.src = 'https://salesiq.zoho.com/hakunamatatasolutions/float.ls?embedname=hakunamatatasolutions';
                    t = d.getElementsByTagName('script')[0];
                    t.parentNode.insertBefore(s, t);

                    function trackVisitor() {
                        try {
                            if ($zoho) {
                                var LDTuvidObj = document.forms['WebToLeads339620000007191001']['LDTuvid'];
                                if (LDTuvidObj) { LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid(); }
                                var firstnameObj = document.forms['WebToLeads339620000007191001']['First Name'];
                                if (firstnameObj) { name = firstnameObj.value + ' ' + name; } $zoho.salesiq.visitor.name(name);
                                var emailObj = document.forms['WebToLeads339620000007191001']['Email'];
                                if (emailObj) {
                                    email = emailObj.value;
                                    $zoho.salesiq.visitor.email(email);
                                }
                            }
                        } catch (e) {}
                    }
                    // ]]>
                    </script>
                </form>
            </div>
        </div>
        <?php 
include_once '../view/footer.php'
 ?>