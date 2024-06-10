function Convert_HTML_To_PDF() {
window.jsPDF = window.jspdf.jsPDF;
var doc = new jsPDF('p', 'mm', ['297 ','350']);
// Source HTMLElement or a string containing HTML.
var elementHTML = document.querySelector("#wrapper");

doc.html(elementHTML, {
    callback: function(doc) {
        // Save the PDF
        doc.save('invoice.pdf');
    },
        margin: [1, 1, 1, 1],
        autoPaging: 'text',
        x: 1,
        y: 1,
        width: 200, //target width in the PDF document
        windowWidth: 675 //window width in CSS pixels
});
}