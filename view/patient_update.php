<?php
$citizen_id_number = filter_input(INPUT_GET, 'citizen_id_number');
if (isset($citizen_id_number)) {
    $patient = getPatient($citizen_id_number);
}
$input = filter_input(INPUT_POST, "btnUpdate");
if (isset($input)) {
    $medrecordnumber = filter_input(INPUT_POST, 'txtMRN');
    $citizenidnumber = filter_input(INPUT_POST, 'txtCIN');
    $name = filter_input(INPUT_POST, 'txtName');
    $address = filter_input(INPUT_POST, 'txtAddress');
    $birthplace = filter_input(INPUT_POST, 'txtBirthPlace');
    $birthdate = filter_input(INPUT_POST, 'txtBirthDate');
    $phonenumber = filter_input(INPUT_POST, 'txtPhoneNumber');
    $photo = filter_input(INPUT_POST, 'txtPhoto');
    $insurance = filter_input(INPUT_POST, 'txtInsurance');
    updatePatient($medrecordnumber, $citizenidnumber, $name, $address, $birthplace, $birthdate, $phonenumber, $photo, $insurance);
    header("location:index.php?menu=pt");
}
?>

<form method="post">
    <fieldset>
        <legend> Update Patient</legend>
        <label> Patient Name </label>
        <label>Med Record Number : </label>
        <input type="text" name="txtMRN" id="MRN" autofocus required class="form-input">
        <label>Id Number : </label>
        <input type="text" name="txtCIN" id="CIN" autofocus required class="form-input">
        <label>Name : </label>
        <input type="text" name="txtName" id="Name" autofocus required class="form-input">
        <label>Address : </label>
        <input type="text" name="txtAddress" id="Address" autofocus required class="form-input">
        <label>Birth Place : </label>
        <input type="text" name="txtBirthPlace" id="BirthPlace" autofocus required class="form-input">
        <label>Birth Date : </label>
        <input type="date" name="txtBirthDate" id="BirthDate" autofocus required class="form-input">
        <label>Phone Number : </label>
        <input type="text" name="txtPhoneNumber" id="PhoneNumber" autofocus required class="form-input">
        <label>Photo : </label>
        <input type="text" name="txtPhoto" id="Photo" autofocus required class="form-input">
        <select name="txtInsurance">
            <?php
            $data = getAllInsurance();
            foreach ($data as $insurance) {
                echo "<option value='".$insurance['id']."'>" . $insurance['name_class']."</option>" ;
            }
            ?>
        </select>
        <input type="submit" name="btnUpdate" value="Update Patient" class="button button-primary">
    </fieldset>
</form>