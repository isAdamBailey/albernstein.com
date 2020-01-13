<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="modal-1-Label">Anti-social Vampires</h4>
</div>
<div class="modal-body"> 
	<h4>Listening to the call of the wild: the anti-social emotional vampire checklist</h4>
	<p><strong>Scoring</strong>: five or more true answers qualifies the person as an anti-social emotional vampire, 
	though not necessarily for a diagnosis of anti-social personality. If the person scores higher than ten, hold onto your wallet, and your heart.</p>

	<form id="antiSocial-checklist" method="post">
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="1"> This person believes that rules were made to be broken.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="2"> This person is adept at using excuses to avoid doing what he or she doesn't want to do.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="3"> This person has had legal problems.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="4"> This person regularly engages in dangerous activities for their thrill value.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="5"> This person can turn on brilliant bursts of charm to get his or her way.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="6"> This person is not very good at managing his or her finances.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="7"> This person smokes without apology.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="8"> This person has one or more other addictions.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="9"> This person has had more sex partners than most people.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="10"> This person seldom worries.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="11"> This person actually believes that some problems can be settled with a fist fight.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="12"> This person sees no problem with lying to achieve a goal.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="13"> This person justifies doing bad things to people because they would do it too if they had the chance.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="14"> This person can consciously throw a tantrum to get his or her way.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="15"> This person doesn't understand the concept of looking before you leap.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="16"> This person believes in having fun first and doing the work later.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="17"> This person has been fired from a job, or has quit impulsively.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="18"> This person refuses to comply with any sort of dress code.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="19"> This person regularly makes promises that he or she never keeps.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="20"> Despite all these faults, this person is still one of the most exciting people i have ever met.
			</label>
		</div>
		</div>

		<div id="antiSoc-msg"></div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary" id="submit">See Score</button>
		</div>
	</form>
	
</div>

<script>
	// submit form inside modal
	$(function(){
	    $('#antiSocial-checklist').on('submit', function(e){
	      var count = $("[type='checkbox']:checked").length;
	      e.preventDefault();
	      $.post('', 
	         $('#antiSocial-checklist').serialize(), 
	         function(data, status, xhr){
	         	if(count < 5){
	         		$("#antiSoc-msg").html("<p class='msg text-primary'>The score is " + count + ". This person is not likely to be an anti-social emotional vampire.</p>");
	         	} else {
					if(count > 4 && count < 11) {
		       	   		$("#antiSoc-msg").html("<p class='msg text-warning'>The score is " + count + ". This person qualifies as an anti-social emotional vampire, though not necessarily for a diagnosis of anti-social personality.</p>");
		       	    } else {
		       	   		$("#antiSoc-msg").html("<p class='msg text-danger'>The score is " + count + ". Hold onto your wallet, and your heart.</p>");
		       	    }
		       	}
	         });
	      	 // reset checkboxes
	      	 $('input[type=checkbox]').attr('checked',false);
	    });
	});
</script>