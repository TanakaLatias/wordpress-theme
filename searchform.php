<form action="<?php echo home_url(); ?>">
  <label for="search" class='search-label'>Search:</label>
  <br>
  <input type="text" id="search" name="s" placeholder="" value="<?php the_search_query(); ?>">
  <input type="submit" value="Go">
</form>