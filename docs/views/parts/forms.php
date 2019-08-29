<section class="section">
  <div class="row">
    <div class="col w-2/3@d mx-auto">
      <form action="" method="">
        <h4 class="fw-700 fs-d2">Form Elements</h4>
        <div class="mb-1">
          <label for="exampleText">Text Label</label>
          <input type="email" id="exampleText" aria-describedby="textHelp" placeholder="Enter some text">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <div class="bg-yellow pa-0h fs-xs">
            <b>Here's an alert</b>: We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mb-1">
          <label for="exampleSelect1">Example select</label>
          <select id="exampleSelect1">
            <option selected="selected" disabled="disabled">Select...</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple id="exampleSelect2">
            <option>Extra Small</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="exampleTextarea">Example textarea</label>
          <textarea id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="mb-1">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile" aria-describedby="fileHelp">
          <small class="tc-gray-400">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <button type="submit" class="btn">Submit</button>
      </form>
    </div>
  </div>
</section>

<section class="section bg-white">
  <div class="row">
    <div class="col w-2/3@d mx-auto">
      <form action="" method="">
        <h4 class="fw-700 fs-d2">Inline Form and Plaintext Input</h4>
        <div class="bg-gray-50 bc-gray-200 pa-1">
          <div class="row items-center">
            <div class="col w-40@t">
              <label class="sr-only" for="exampleInputEmailx">Email address</label>
              <input class="-plaintext" readonly type="email" id="exampleInputEmailx" aria-describedby="emailHelp" placeholder="plain.text@readonly.com">
            </div>
            <div class="col w-40@t">
              <label class="sr-only" for="exampleInputPasswordx">Password</label>
              <input type="password" id="exampleInputPasswordx" placeholder="Password">
            </div>
            <div class="col w-20@t ta-c">
              <button type="submit" class="btn -block">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section bg-gray-100">
  <div class="row">
    <div class="col w-2/3@d mx-auto">
      <form action="" method="">
        <fieldset>
          <legend class="fw-700 fs-d2">Radio Buttons and Checkboxes</legend>
            <p class="fs-sm"><i>Wrap these elements in <code>.input_choice</code>.</i></p>
            <div class="input_choice bg-gray-50 bc-gray-200 pa-1 mb-1">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
              <label class="tc-gray-300">
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                Option three is disabled
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                Option four
              </label>
            </div>

            <p class="fs-sm"><i>Wrap in <code>.input_choice.-inline</code> to the chain to get them on the same line.</i></p>
            <div class="input_choice -inline bg-gray-50 bc-gray-200 pa-1">
              <label>
                <input type="checkbox"> Check me out
              </label>
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
        </fieldset>
      </form>
    </div>
  </div>
</section>

<section class="section -md bg-white">
  <div class="row">
    <div class="col w-2/3@d mx-auto">
      <form action="" method="">
        <h4 class="fw-700 fs-d2">Enclosures</h4>
        <p class="fs-sm"><i>Add the <code>.input_enclosed</code> wrapper to make the appearance of a self-contained input and button.</i></p>
        <div class="input_enclosed -search mb-3@t">
          <label class="sr-only">Search</label>
          <input type="text" placeholder="Search (.input_enclosed)">
          <button type="submit" class="btn">Go</button>
        </div>

        <p class="fs-sm"><i>Add <code>\.-line</code> to the <code>.input_enclosed</code> wrapper to remove the background and outline and add a simple border along the bottom.</i></p>
        <div class="input_enclosed -line mb-2@t">
          <label class="sr-only">Search</label>
          <input type="text" placeholder="Search (.input_enclosed.\-line)">
          <button type="submit" class="btn">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section bg-gray-700">
  <div class="row">
    <div class="col w-2/3@d mx-auto">
      <form action="" method="">
        <div class="input_enclosed -search -line my-2@t">
          <label class="sr-only">Search</label>
          <input type="text" class="tc-white" placeholder="Search">
          <button type="submit" class="btn tc-white">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>
