<section class="section --md bg--gray-100">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <h4 class="fw--700 fs--d2">Form Elements</h4>
        <div class="__group">
          <label for="exampleText">Text Label</label>
          <input type="email" id="exampleText" aria-describedby="textHelp" placeholder="Enter some text">
        </div>
        <div class="__group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <div class="alert --sm bg--yellow">
            <div class="__body">
              <div class="__excerpt"><b>Here's an alert</b>: We'll never share your email with anyone else.</div>
            </div>
          </div>
        </div>
        <div class="__group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="__group">
          <label for="exampleSelect1">Example select</label>
          <select id="exampleSelect1">
            <option selected="selected" disabled="disabled">Select...</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="__group">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple id="exampleSelect2">
            <option>Extra Small</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="__group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="__group">
          <label for="exampleInputFile">File input</label>
          <input type="file" class="__control __control--file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="tc--gray-400">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <button type="submit" class="btn btn--primary">Submit</button>
      </form>
    </div>
  </div>
</section>

<section class="section --md bg--white">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <h4 class="fw--700 fs--d2">Inline Form and Plaintext Input</h4>
        <div class="__group --inline bg--gray-50 bc--gray-200 pa--1@xs">
          <label class="sr--only" for="exampleInputEmailx">Email address</label>
          <input class="--plaintext" readonly type="email" id="exampleInputEmailx" aria-describedby="emailHelp" placeholder="plain.text@readonly.com">
          <label class="sr--only" for="exampleInputPasswordx">Password</label>
          <input type="password" id="exampleInputPasswordx" placeholder="Password">
          <button type="submit" class="btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section --md bg--gray-100">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <fieldset>
          <legend class="fw--700 fs--d2">Radio Buttons and Checkboxes</legend>
            <p class="fs--sm"><i>Wrap these elements in <code>.__group.--check</code>.</i></p>
            <div class="__group --check bg--gray-50 bc--gray-200 pa--1@xs">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
              <label class="disabled">
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                Option three is disabled
              </label>
            </div>

            <p class="fs--sm"><i>Add <code>.--inline</code> to the chain to get them on the same line.</i></p>
            <div class="__group --check --inline bg--gray-50 bc--gray-200 pa--1@xs">
              <label>
                <input type="checkbox">
                Check me out
              </label>
              <label>
                <input type="checkbox">
                Check me out
              </label>
            </div>
        </fieldset>
      </form>
    </div>
  </div>
</section>

<section class="section --md bg--white">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <h4 class="fw--700 fs--d2">Sizes and Enclosures</h4>
        <p class="fs--sm"><i>Add <code>.--lg</code> or <code>.--sm</code> to the input to change its size.</i></p>
        <div class="__group">
          <input type="text" class="--lg" placeholder="input.--lg">
        </div>
        <div class="__group mb--3@xs">
          <input type="text" class="--sm" placeholder="input.--sm">
        </div>

        <p class="fs--sm"><i>Add <code>.--enclosed</code> to the <code>.__group</code> wrapper to make the appearance of a self-contained input and button.</i></p>
        <div class="__group --enclosed mb--3@md">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search (.--enclosed)">
          <button type="submit" class="btn btn--primary">Go</button>
        </div>

        <p class="fs--sm"><i>Add <code>.+line</code> to the <code>.__group.--enclosed</code> wrapper to remove the background and outline and add a simple border along the bottom.</i></p>
        <div class="__group --enclosed +line mb--3@md">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search (.--enclosed.+line)">
          <button type="submit" class="btn --primary">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section --md bg--gray-700">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <div class="__group --enclosed --dark +line mb--3@md">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search (.--enclosed.--dark.+line)">
          <button type="submit" class="btn --primary">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>
