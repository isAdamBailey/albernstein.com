<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="modal-1-Label">Histrionic Vampires</h4>
</div>
<div class="modal-body"> 
	<h4>Living a soap opera: the histrionic vampire checklist</h4>
	<p><strong>Scoring</strong>: Five or more true answers qualifies the person as a Histrionic Emotional Vampire, though not necessarily for a diagnosis of Histrionic Personality.  
	If the person scores higher than ten, be careful that you don't inadvertently join the cast of his or her soap opera. </p>

	<form id="histrionic-checklist" method="post">
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="1"> This person usually stands out in a crowd by virtue of looks, dress, or personality.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="2"> This person is friendly, enthusiastic, entertaining and absolutely wonderful in social situations.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="3"> This person treats superficial acquaintances as if they were close friends
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="4"> This person may become visibly upset when forced to share the center of attention.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="5"> This person frequently changes his or her style of dress and overall look.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="6"> This person loves to talk, gossip, and tell stories.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="7"> The stories usually become more exaggerated and dramatic with each retelling.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="8"> This person has a good fashion sense, but perhaps a bit too much concern with his or her appearance.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="9"> This person can become very upset over relatively small social slights.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="10"> This person seldom admits to being angry, even when his or her anger is quite apparent to other people.  
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="11"> This person has very little memory for day to day details.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="12"> This person believes in supernatural entities, like angels, deities, or benevolent spirits who regularly intervene in everyday life.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="13"> This person has one or more unusual ailment that comes and goes according to no discernable pattern.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="14"> This person has some problems doing regular chores like paperwork, housecleaning, or paying bills.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="15"> This person has been known to get sick to avoid doing something unpleasant.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="16"> This person fervently follows several television shows or sports teams.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="17"> This person's communication, though highly colored, is often indirect and vague.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="18"> This person requires more maintenance than a rare orchid, but believes he or she is the easiest person in the world to get along with.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="19"> This person often seems seductive, whether he or she would admit to it or not.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="20"> Despite all the problems, this person is always in demand, and more popular than i could ever hope to be.
			</label>
		</div>
		</div>

		<div id="hist-msg"></div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary" id="submit">See Score</button>
		</div>
	</form>
</div>

<script>
	// submit form inside modal
	$(function(){

	    $('#histrionic-checklist').on('submit', function(e){
	      var count = 0;
	      var count = $("[type='checkbox']:checked").length;
	      e.preventDefault();
	      $.post('', 
	         $('#histrionic-checklist').serialize(), 
	         function(data, status, xhr){
	         	if(count < 5){
	         		$("#hist-msg").html("<p class='msg text-primary'>The score is " + count + ". This person is not likely to be a Histrionic Emotional Vampire.</p>");
	         	} else {
					if(count > 4 && count < 11) {
		       	   		$("#hist-msg").html("<p class='msg text-warning'>The score is " + count + ". This person qualifies as a Histrionic Emotional Vampire, though not necessarily for a diagnosis of Histrionic Personality</p>");
		       	    } else {
		       	   		$("#hist-msg").html("<p class='msg text-danger'>The score is " + count + ". Be careful that you don't inadvertently join the cast of his or her soap opera.</p>");
		       	    }
		       	}
	         });
	      	 // reset checkboxes
	      	 $('input[type=checkbox]').attr('checked',false);
	    });
	});
</script>