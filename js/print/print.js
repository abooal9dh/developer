<button id="printButton" direction="ltr" onclick="print ()">ØÈÇÚÉ</button>

<script>window.jsPDF = window.jspdf.jsPDF;

var doc = new jsPDF();
	
// Source HTMLElement or a string containing HTML.
var elementHTML = document.querySelector("#contnet");

doc.html(elementHTML, {
    callback: function(doc) {
        // Save the PDF
        doc.save('sample-document.pdf');
    },
    x: 15,
    y: 15,
    width: 170, //target width in the PDF document
    windowWidth: 650 //window width in CSS pixels
});</script>