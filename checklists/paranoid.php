<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="modal-1-Label">Paranoid Vampires</h4>
</div>
<div class="modal-body"> 
	<h4>Next stop, the twilight zone: the paranoid emotional vampire checklist</h4>
	<p><strong>Scoring</strong>: Scoring: Five or more true answers qualifies the person as a Paranoid Emotional Vampire, though not necessarily for a diagnosis of Paranoid Personality. With twelve or more true answers, watch out for Imperial storm-troopers.</p>

	<form id="paranoid-checklist" method="post">
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="1"> This person is overly suspicious.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="2"> This person has very few close friends.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="3"> This person can make a big deal out of nothing.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="4"> This person tends to see many situations as struggles between good and evil.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="5"> This person never seems to let go of a hurt or mistreatment.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="6"> This person seldom takes what he or she is told at face value.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="7"> This person will cut people out of his or her life for tiny slights.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="8"> This person is able to detect deception in one or two parts per billion, and sometimes sees it when it isn't there at all.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="9"> This person demands absolute loyalty in thought and deed.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="10"> This person is fiercely protective of his or her family.  (or one or two close friends)
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="11"> This person sees connections among things that most people would consider unrelated.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="12"> This person sees little mistakes, such as lack of punctuality or forgetting instructions, as indications of disloyalty or disrespect.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="13"> This person tells people what others only say behind their backs.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="14"> This person may have a good sense of humor, but cannot seem to laugh at him or herself.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="15"> What will make this person angry seems completely unpredictable.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="16"> This person sees him or herself as a victim of multiple discriminations.  
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="17"> This person believes trust is something that has to be earned.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="18"> This person has taken ill considered actions “on principle”.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="19"> This person often talks about suing people to redress wrongs.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="20"> This person questions people to determine their loyalty and fidelity.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="21"> This person collects little details that seem to prove his or her pet theories.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="22"> This person believes in the literal interpretation of the bible or other religious text.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="23"> This person believes in ufo’s, astrology, psychic phenomena or other concepts that most people consider to be on the fringe of credibility.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="24"> This person openly advocates cruel and unusual punishment for certain classes of people. (e.g. They should take all the bigots and . . .)
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="25"> Though i won't always admit it, this person is sometimes embarrassingly correct in his or her assessment of me.
			</label>
		</div>
		</div>

		<div id="para-msg"></div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary" id="submit">See Score</button>
		</div>
	</form>
</div>

<script>
	// submit form inside modal
	$(function(){
	    $('#paranoid-checklist').on('submit', function(e){
	      var count = $("[type='checkbox']:checked").length;
	      e.preventDefault();
	      $.post('', 
	         $('#paranoid-checklist').serialize(), 
	         function(data, status, xhr){
	         	if(count < 5){
	         		$("#para-msg").html("<p class='msg text-primary'>The score is " + count + ". This person is not likely to be a Paranoid Emotional Vampire.</p>");
	         	} else {
					if(count > 4 && count < 12) {
		       	   		$("#para-msg").html("<p class='msg text-warning'>The score is " + count + ". This person qualifies as a Paranoid Emotional Vampire, though not necessarily for a diagnosis of Paranoid Personality.</p>");
		       	    } else {
		       	   		$("#para-msg").html("<p class='msg text-danger'>The score is " + count + ". Watch out for Imperial storm-troopers!</p>");
		       	    }
		       	}
	         });
	      	 // reset checkboxes
	      	 $('input[type=checkbox]').attr('checked',false);
	    });
	});
</script>