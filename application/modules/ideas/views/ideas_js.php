<script type="text/javascript">
	function like_manager(idea_id) {
		value = document.getElementById("like"+idea_id).value;
		// alert(value);
		if (value == "0" || value == undefined){
			like(idea_id);
		}else{
			unlike(idea_id);
		}
	}

	function like(idea_id) {
		Materialize.toast('Gostei', 3000, 'rounded');
		$.ajax({
			type:"GET",
			url:"<?php echo base_url(); ?>ideas/ideas_ajax/like",
			data: "idea_id=" + idea_id,
			success: function (data) {
				document.getElementById("like"+idea_id).value = "1";
				document.getElementById("like"+idea_id).className = "btn-floating waves-light z-depth-0 cyan lighten-4";
			},
			error: function (error) {
				// alert('error; ' + error);
			}
		});
	}

  function unlike(idea_id){
    Materialize.toast('Talvez não...', 3000, 'rounded');
		$.ajax({
			type:"GET",
			url:"<?php echo base_url(); ?>ideas/ideas_ajax/unlike",
			data: "idea_id=" + idea_id,
			success: function (data) {
				document.getElementById("like"+idea_id).value = "0";
				document.getElementById("like"+idea_id).className = "btn-floating waves-light";
			},
			error: function (error) {
				// alert('error; ' + error);
			}
		});
  }

  function share(){
    Materialize.toast('Já está no ctrl+c', 3000, 'rounded');
  }
</script>
