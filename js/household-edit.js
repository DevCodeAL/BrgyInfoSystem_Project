document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');
    const modal = document.getElementById('modal-edit-form');
    const closeBtn = document.querySelector('.close-content');
    const blotterIdInput = document.getElementById('blotterId');

    // Fetch all data when the page loads
    $.ajax({
        url: 'household_id.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // Store the fetched data globally for later use
            window.blotterData = data;
        },
        error: function (xhr, status, error) {
            console.error('Error fetching all data:', error);
        }
    });

    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            // Set the ID in the hidden input field
            blotterIdInput.value = id;
            // Find the data for the selected ID
            const selectedData = window.blotterData.find(item => item.id == id);

            // Populate the form fields with the selected data
            document.getElementById("FamLnames").value = selectedData.fam_lastname;
            document.getElementById("famTotals").value = selectedData.fam_Mt;
            document.getElementById("Hnumbers").value = selectedData.Hs;
            document.getElementById("SbNs").value = selectedData.Sb_number;
            document.getElementById("con_Nums").value = selectedData.contact_number;
            document.getElementById("pAddresss").value = selectedData.perm_add;

            document.getElementById("S_Relationship").value = selectedData.relationship;
            document.getElementById("S_fullName").value = selectedData.fullname;
            document.getElementById("S_agess").value = selectedData.age;
            document.getElementById("Genderss").value = selectedData.gender;
            document.getElementById("S_occupations").value = selectedData.occupation;
            document.getElementById("S_Address").value = selectedData.address;

            document.getElementById("S_rel").value = selectedData.S_relationship;
            document.getElementById("Spouse_names").value = selectedData.S_fullname;
            document.getElementById("SAge").value = selectedData.S_age;
            document.getElementById("Spouse_genders").value = selectedData.S_gender;
            document.getElementById("Spouse_occupations").value = selectedData.S_occupation;
            document.getElementById("Spouse_Addresss").value = selectedData.S_address;

            document.getElementById("Child_relationships").value = selectedData.C_relationship;
            document.getElementById("Child_names").value = selectedData.C_fullname;

            // Show the modal
            modal.style.display = "block";
        });
    });

    closeBtn.addEventListener("click", function () {
        modal.style.display = "none";
    });
});
