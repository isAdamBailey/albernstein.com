<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="modal-1-Label">Obsessive-Compulsive Vampires</h4>
</div>
<div class="modal-body"> 
	<h4>Vice masquerading as virtue: the obsessive-compulsive vampire checklist</h4>
	<p><strong>Scoring</strong>: Five or more true answers qualifies the person as an Obsessive-Compulsive Emotional Vampire, though not necessarily for a diagnosis of Obsessive-Compulsive Personality.  If the person scores higher than ten, don't get too close or you'll get zapped.</p>

	<form id="ocd-checklist" method="post">
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="1"> This person is a workaholic.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="2"> This person has a hard time relaxing.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="3"> This person believes there's a right way and a wrong way to do everything.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="4"> This person can usually find something wrong with other people's way of doing anything.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="5"> This person takes an inordinately long time to make up his or her mind, even about small matters.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="6"> Once this person has made up his or her mind, it's almost impossible to change it.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="7"> This person seldom gives a simple yes or no answer.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="8"> This person's attention to detail may be annoying, but it has saved people from making dangerous or costly mistakes
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="9"> This person has a very clear moral code.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="10"> This person never seems to throw anything away.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="11"> This person runs his or her life according to the adage, “if you want something right, do it yourself”.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="12"> This person can spend almost as much time organizing a task as doing it.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="13"> This person always looks neat and well organized.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="14"> In meetings, this person will often suggest delaying action until more information can be obtained.  
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="15"> This person balances his or her checkbook to the penny.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="16"> This person is controlling.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="17"> This person does not see him or herself as controlling, only right.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="18"> This person, when asked to give input on something written, will always correct the grammar and spelling, and sometimes make no comment on the overall idea.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="19"> This person expresses anger by asking hostile questions that he or she sees as simple requests for information.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="20"> This person becomes irritated or upset if asked to deviate from his or her routines.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="21"> This person often feels overwhelmed by all the work he or she has to do.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="22"> Though this person never says it directly, it's clear he or she takes pride in working harder than everybody else.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="23"> This person takes as much pride in his or her perfect attendance record as he or she does in any other achievements.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="24"> This person has a hard time finishing tasks.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="25"> This person will go through any amount of personal difficulty to make good on a promise, and expects you to do the same.   
			</label>
		</div>
		</div>

		<div id="ocd-msg"></div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary" id="submit">See Score</button>
		</div>
	</form>
</div>

<script>
	// submit form inside modal
	$(function(){
	    $('#ocd-checklist').on('submit', function(e){
	      var count = $("[type='checkbox']:checked").length;
	      e.preventDefault();
	      $.post('', 
	         $('#ocd-checklist').serialize(), 
	         function(data, status, xhr){
	         	if(count < 5){
	         		$("#ocd-msg").html("<p class='msg text-primary'>The score is " + count + ". This person is not likely to be a Obsessive-Compulsive Emotional Vampire.</p>");
	         	} else {
					if(count > 4 && count < 11) {
		       	   		$("#ocd-msg").html("<p class='msg text-warning'>The score is " + count + ". This person qualifies as an Obsessive-Compulsive Emotional Vampire, though not necessarily for a diagnosis of Obsessive-Compulsive Personality.</p>");
		       	    } else {
		       	   		$("#ocd-msg").html("<p class='msg text-danger'>The score is " + count + ". Don't get too close or you'll get zapped!</p>");
		       	    }
		       	}
	         });
	      	 // reset checkboxes
	      	 $('input[type=checkbox]').attr('checked',false);
	    });
	});
</script>

