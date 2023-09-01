// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(seletor).DataTable({
      data: dados, // array com dados
      columns: colunas, // vetor com nome das colunas
      language: {
        url:"js/demo/pt_br.json"
      }
})
