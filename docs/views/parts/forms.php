<section class="section">
  <div class="g-row">
    <div class="g-col --12@xs --8@lg offset-2@lg">
      <form action="" method="">
        <div class="form__group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form__control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
          <small id="emailHelp" class="alert --sm text--muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form__group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form__control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form__group">
          <label for="exampleSelect1">Example select</label>
          <select class="form__control" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form__group">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple class="form__control" id="exampleSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form__group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea class="form__control" id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="form__group">
          <label for="exampleInputFile">File input</label>
          <input type="file" class="form__control form__control--file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="text--muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form__group">
          <legend>Radio buttons</legend>
          <div class="form__check">
            <label class="form__check__label">
              <input type="radio" class="form__check__input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="form__check">
            <label class="form__check__label">
              <input type="radio" class="form__check__input" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="form__check disabled">
            <label class="form__check__label">
              <input type="radio" class="form__check__input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Option three is disabled
            </label>
          </div>
        </fieldset>

        <div class="form__group">
          <div class="form__check form__check--inline">
            <label class="form__check__label">
              <input type="checkbox" class="form__check__input">
              Check me out
            </label>
          </div>
          <div class="form__check form__check--inline">
            <label class="form__check__label">
              <input type="checkbox" class="form__check__input">
              Check me out
            </label>
          </div>
        </div>

        <div class="form__group">
          <input type="text" class="form__control form__control--lg" placeholder="form__control--lg">
        </div>
        <div class="form__group">
          <input type="text" class="form__control form__control--sm" placeholder="form__control--sm">
        </div>

        <button type="submit" class="btn btn--primary">Submit</button>
      </form>
    </div>
  </div>
</section>
