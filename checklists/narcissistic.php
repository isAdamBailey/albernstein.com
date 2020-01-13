<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="modal-1-Label">Narcissistic Vampires</h4>
</div>
<div class="modal-body"> 
	<h4>The smartest, most talented, all-around best person in the world test: the narcissistic vampire checklist</h4>
	<p><strong>Scoring</strong>: Five or more true answers qualifies the person as a Narcissistic Emotional Vampire, though not necessarily for a diagnosis of Narcissistic Personality.  If the person scores higher than ten, and is not a member of the royal family, be careful that you aren't mistaken for one of the servants.</p>

	<form id="narcissistic-checklist" method="post">
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="1"> This person has achieved more than most people his or her age.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="2"> This person is firmly convinced that he or she is better, smarter, or more talented than other people.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="3"> This person loves competition, but is a poor loser.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="4"> This person has fantasies of doing something great or being famous, and often expects to be treated as if these fantasies had already come true.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="5"> This person has very little interest in what other people are thinking or feeling, unless he or she wants something from them.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="6"> This person is a name dropper.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="7"> To this person it is very important to live in the right place and associate with the right people.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="8"> This person takes advantage of other people to achieve his or her own goals.
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="9"> This person usually manages to be in a category by him or herself.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="10"> This person often feels put upon when asked to take care of his or her responsibilities to family, friends, or work group.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="11"> This person regularly disregards rules or expects them to be changed because he or she is in some way special.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="12"> This person becomes irritated when other people don't automatically do what he or she wants them to do, even when they have a good reason for not complying
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="13"> This person reviews sports, art, and literature by telling you what he or she would have done instead.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="14"> This person thinks most criticisms of him or her are motivated by jealousy.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="15"> This person regards anything short of worship to be rejection.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="16"> This person suffers from a congenital inability to recognize his or her own mistakes.  on the rare occasions that this person does recognize a mistake, even the slightest error can precipitate a major depression.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="17"> This person often explains why people who are better known than he or she is are not really all that great.  
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="18"> This person often complains of being mistreated or misunderstood.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="19"> People either love or hate this person.
			</label>
		</div>
		<div class="checkbox">
			<label>
			  <input type="checkbox" name="checklist[]" value="20"> Despite this person's overly high opinion of him or herself, he or she is really quite intelligent and talented.
			</label>
		</div>
		</div>

		<div id="narc-msg"></div>

		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary" id="submit">See Score</button>
		</div>
	</form>
</div>

<script>
	// submit form inside modal
	$(function(){
	    $('#narcissistic-checklist').on('submit', function(e){
	      var count = $("[type='checkbox']:checked").length;
	      e.preventDefault();
	      $.post('', 
	         $('#narcissistic-checklist').serialize(), 
	         function(data, status, xhr){
	         	if(count < 5){
	         		$("#narc-msg").html("<p class='msg text-primary'>The score is " + count + ". This person is not likely to be a Narcissistic Emotional Vampire.</p>");
	         	} else {
					if(count > 4 && count < 11) {
		       	   		$("#narc-msg").html("<p class='msg text-warning'>The score is " + count + ". This person qualifies as a Narcissistic Emotional Vampire, though not necessarily for a diagnosis of Narcissistic Personality.</p>");
		       	    } else {
		       	   		$("#narc-msg").html("<p class='msg text-danger'>The score is " + count + ". If this person is not a member of the royal family, be careful that you aren't mistaken for one of the servants.</p>");
		       	    }
		       	}
	         });
	      	 // reset checkboxes
	      	 $('input[type=checkbox]').attr('checked',false);
	    });
	});

</script>

