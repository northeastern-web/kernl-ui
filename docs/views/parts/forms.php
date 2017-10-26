<section class="section k_bg-light">
  <div class="row">
    <div class="col --12@xs --8@lg --offset-2@lg">
      <form action="" method="">
        <div class="__group">
          <label for="exampleText">Text Label</label>
          <input type="email" class="__control" id="exampleText" aria-describedby="textHelp" placeholder="Enter some text">
        </div>
        <div class="__group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="__control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <div class="alert --sm --dark">
            <div class="__body">
              <div class="__excerpt"><b>Here's an alert</b>: We'll never share your email with anyone else.</div>
            </div>
          </div>
        </div>
        <div class="__group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="__control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="__group">
          <label for="exampleSelect1">Example select</label>
          <select class="__control" id="exampleSelect1">
            <option selected="selected" disabled="disabled">Select...</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="__group">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple class="__control" id="exampleSelect2">
            <option>Extra Small</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="__group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea class="__control" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="__group">
          <label for="exampleInputFile">File input</label>
          <input type="file" class="__control __control--file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="text--muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="__group">
          <legend>Radio buttons</legend>
          <div class="__check">
            <label class="__check__label">
              <input type="radio" class="__check__input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="__check">
            <label class="__check__label">
              <input type="radio" class="__check__input" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="__check disabled">
            <label class="__check__label">
              <input type="radio" class="__check__input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Option three is disabled
            </label>
          </div>
        </fieldset>

        <div class="__group">
          <div class="__check __check--inline">
            <label class="__check__label">
              <input type="checkbox" class="__check__input">
              Check me out
            </label>
          </div>
          <div class="__check __check--inline">
            <label class="__check__label">
              <input type="checkbox" class="__check__input">
              Check me out
            </label>
          </div>
        </div>

        <div class="__group">
          <input type="text" class="__control __control--lg" placeholder="__control--lg">
        </div>
        <div class="__group">
          <input type="text" class="__control __control--sm" placeholder="__control--sm">
        </div>

        <button type="submit" class="btn btn--primary">Submit</button>
      </form>
    </div>
  </div>
</section>
