<script type="text/javascript">
	function like_manager(challenge_id) {
		value = document.getElementById("like"+challenge_id).value;
		// alert(value);
		if (value == "0" || value == undefined){
			like(challenge_id);
		}else{
			unlike(challenge_id);
		}
	}

	function like(challenge_id) {
		Materialize.toast('Gostei', 3000, 'rounded');
		$.ajax({
			type:"GET",
			url:"<?php echo base_url(); ?>challenges/challenges_ajax/like",
			data: "challenge_id=" + challenge_id,
			success: function (data) {
				document.getElementById("like"+challenge_id).value = "1";
				document.getElementById("like"+challenge_id).className = "btn-floating waves-light z-depth-0 cyan lighten-4";
			},
			error: function (error) {
				// alert('error; ' + error);
			}
		});
	}

  function unlike(challenge_id){
    Materialize.toast('Talvez não...', 3000, 'rounded');
		$.ajax({
			type:"GET",
			url:"<?php echo base_url(); ?>challenges/challenges_ajax/unlike",
			data: "challenge_id=" + challenge_id,
			success: function (data) {
				document.getElementById("like"+challenge_id).value = "0";
				document.getElementById("like"+challenge_id).className = "btn-floating waves-light";
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
