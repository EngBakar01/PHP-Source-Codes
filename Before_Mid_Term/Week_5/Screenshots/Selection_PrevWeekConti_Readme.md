PHP Single and Multiple District Selection Screenshots

This section demonstrates HTML dropdown selection and how PHP reads submitted values in the course Web Application Development - PHP & MySQL. The example offers district choices such as Hodan, Kaaraan, Ceelasha, Wadajir, Dharkeynley, and Darusalaam.
Note: In the supplied full code, the single-selection HTML and PHP are commented out. Only the multiple-selection form and its PHP handler execute unless you switch which example is enabled.
8. HTML Single District Selection
Screenshot Name
Single Selection HTML.png
Description
This screenshot shows an HTML form that lets the user select one district from a dropdown list.
Main concepts covered:
- <form action="" method="post"> submits the form to the current page using POST.
- <select name="Districts"> creates a single-selection dropdown.
- <option value="..."> defines the submitted value for each district.
- The first selected disabled option acts as a placeholder and cannot be submitted as a selected choice.
- The Register button submits the selection.
Example Code
<!-- Single Select Option -->
<form action="" method="post">
    <select name="Districts">
        <option value="" selected disabled>Select One District</option>
        <option value="Hodan">Hodan</option>
        <option value="Kaaraan ">Kaaraan</option>
        <option value="Ceelasha">Ceelasha</option>
        <option value="Wadajir">Wadajir</option>
        <option value="Dharkeynley">Dharkenley</option>
        <option value="Darusalaam">Darusalaam</option>
    </select>
    <hr>
    <input type="submit" name="submit" value="Register">
</form>
Important: Without the multiple attribute, a <select> submits one string under the key Districts. The source code includes a trailing space in the Kaaraan  value.
Screenshot

9. PHP Processing a Single District Selection
Screenshot Name
Single Selection PHP.png
Description
This screenshot demonstrates how PHP reads one selected district using $_POST['Districts'] and displays a response.
Main concepts covered:
- $_POST is a PHP superglobal array containing submitted POST form values.
- !empty($_POST['Districts']) checks whether a nonempty district value was received.
- echo prints the selected district in the browser.
- else displays a message if no district value was received.
Example Code
// Single selection
if (!empty($_POST['Districts']))
{
    echo "Selected District: " . $_POST['Districts'];
}
else
{
    echo "No District Selected";
}
Example Output
Selected District: Hodan
If no district is submitted:
No District Selected
Important: This PHP section is commented out in the supplied full code. To practice it, enable both the single-selection form and its matching PHP handler, and disable the multiple-selection example.
Screenshot

10. HTML Multiple District Selection
Screenshot Name
Multiple Selection HTML.png
Description
This screenshot shows an HTML form that lets the user select more than one district from the list.
Main concepts covered:
- The multiple attribute allows more than one option to be selected.
- name="Districts[]" tells PHP to receive the selected values as an array.
- Every selected <option> contributes a value to the submitted array.
- On many desktop browsers, users can hold Ctrl (or Command on macOS) to select separate options, or Shift to select a range.
Example Code
<!-- Multiple Select Option -->
<form action="" method="post">
    <select name="Districts[]" multiple>
        <option value="" selected disabled>Select Multiple Districts</option>
        <option value="Hodan">Hodan</option>
        <option value="Kaaraan ">Kaaraan</option>
        <option value="Ceelasha">Ceelasha</option>
        <option value="Wadajir">Wadajir</option>
        <option value="Dharkeynley">Dharkenley</option>
        <option value="Darusalaam">Darusalaam</option>
    </select>
    <hr>
    <input type="submit" name="submit" value="Register">
</form>
Important: The brackets [] in Districts[] are essential in this example because PHP needs to receive an array rather than one string.
Screenshot

11. PHP Processing Multiple Selected Districts
Screenshot Name
Multiple Selection PHP.png
Description
This screenshot demonstrates how PHP checks for selected districts and uses a foreach loop to display each selected value.
Main concepts covered:
- !empty($_POST['Districts']) checks whether the submitted selection array is nonempty.
- foreach ($_POST['Districts'] as $district) loops through selected district names one at a time.
- $district holds the current option value during each iteration.
- echo displays each selected district.
- &nbsp; is an HTML nonbreaking space used here to separate displayed values.
- else handles the case where no district is selected.
Example Code
// Multiple selection
if (!empty($_POST['Districts']))
{
    echo "Selected District: ";
    foreach ($_POST['Districts'] as $district)
    {
        echo $district . " . &nbsp; ";
    }
}
else
{
    echo "No Districts Selected";
}
Example Output
If Hodan, Wadajir, and Darusalaam are selected, the page displays values similar to:
Selected District: Hodan .   Wadajir .   Darusalaam .
If nothing is selected:
No Districts Selected
Important: The period . inside the quoted string (" . &nbsp; ") is displayed as a literal separator. The other period, outside the quotes, is PHP's string-concatenation operator.
Screenshot

12. Difference Between Single and Multiple Selection
Feature	Single Selection	Multiple Selection
HTML field	<select name="Districts">	<select name="Districts[]" multiple>
Number of choices	One	More than one
PHP value	String	Array
PHP processing	Directly read $_POST['Districts']	Loop through $_POST['Districts']
Typical display	One selected district	List of selected districts


How the Selection Process Works
1. The user opens the PHP page in a browser.
2. The HTML form shows the available district options.
3. The user selects one or multiple districts, depending on the form.
4. The user clicks Register, sending an HTTP POST request.
5. PHP checks $_POST['Districts'] with empty().
6. For a single selection, PHP prints the string value directly. For multiple selections, PHP uses foreach to print each array element.
7. If no district value was submitted, PHP displays a No District Selected message.
PHP and HTML Concepts Used
Concept	Purpose
<form>	Collects and submits user input.
<select>	Creates a dropdown or list of options.
<option>	Defines a selectable choice.
multiple	Allows multiple option selections.
name="Districts[]"	Submits multiple values as a PHP array.
$_POST	Reads submitted form fields on the server.
empty()	Tests whether the submitted value is empty or absent.
foreach	Processes each item in an array.
echo	Displays output in the browser.


How to Run This Example
1. Save the source code in a .php file, for example district_selection.php.
2. Place the file in a local PHP web server directory such as C:\xampp\htdocs\PHP_test\.
3. Start Apache in XAMPP and open http://localhost/PHP_test/district_selection.php.
4. Test the enabled multiple-selection example. To test single selection instead, uncomment the single-selection form and handler and comment out the multiple-selection form and handler.
Important Notes for Real Applications
- The original code is useful for learning but should not output untrusted user input directly into HTML. Escape displayed values with htmlspecialchars().
- Validate submitted districts against a fixed list of allowed choices on the server; browser options can be modified.
- For the multiple-selection handler, check that the submitted value is an array before passing it to foreach.
- If displaying a message only after submission is desired, check the request method or submit button; otherwise the current example also displays the "No Districts Selected" message on the initial page load.
- The current full source includes both examples, but the single-selection sections are inactive comments, not two simultaneously running forms.
Learning summary: This lesson demonstrates the difference between HTML single and multiple selection, the $_POST superglobal, array input fields, conditional statements, and the foreach loop.