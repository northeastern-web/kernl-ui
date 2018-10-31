<section class="section">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <h4 class="fw--700 fs--d2">Form Elements</h4>
        <div class="mb--1">
          <label for="exampleText">Text Label</label>
          <input type="email" id="exampleText" aria-describedby="textHelp" placeholder="Enter some text">
        </div>
        <div class="mb--1">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <div class="bg--yellow pa--0h fs--xs">
            <b>Here's an alert</b>: We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb--1">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mb--1">
          <label for="exampleSelect1">Example select</label>
          <select id="exampleSelect1">
            <option selected="selected" disabled="disabled">Select...</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="mb--1">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple id="exampleSelect2">
            <option>Extra Small</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>Extra Large</option>
          </select>
        </div>
        <div class="mb--1">
          <label for="exampleTextarea">Example textarea</label>
          <textarea id="exampleTextarea" rows="3"></textarea>
        </div>
        <div class="mb--1">
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
        <div class="bg--gray-50 bc--gray-200 pa--1">
          <div class="row items--center">
            <div class="col w--40@t">
              <label class="sr--only" for="exampleInputEmailx">Email address</label>
              <input class="--plaintext" readonly type="email" id="exampleInputEmailx" aria-describedby="emailHelp" placeholder="plain.text@readonly.com">
            </div>
            <div class="col w--40@t">
              <label class="sr--only" for="exampleInputPasswordx">Password</label>
              <input type="password" id="exampleInputPasswordx" placeholder="Password">
            </div>
            <div class="col w--20@t ta--c">
              <button type="submit" class="btn --block">Submit</button>
            </div>
          </div>
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
            <p class="fs--sm"><i>Wrap these elements in <code>.form__check</code>.</i></p>
            <div class="form__check bg--gray-50 bc--gray-200 pa--1 mb--1">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Option one is this and that&mdash;be sure to include why it's great
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Option two can be something else and selecting it will deselect option one
              </label>
              <label class="tc--gray-300">
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                Option three is disabled
              </label>
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                Option four
              </label>
            </div>

            <p class="fs--sm"><i>Wrap in <code>.form__check.--inline</code> to the chain to get them on the same line.</i></p>
            <div class="form__check --inline bg--gray-50 bc--gray-200 pa--1">
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

<section class="section --md bg--white">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <h4 class="fw--700 fs--d2">Enclosures</h4>
        <p class="fs--sm"><i>Add the <code>.form__enclosed</code> wrapper to make the appearance of a self-contained input and button.</i></p>
        <div class="form__enclosed --search mb--3@t">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search (.--enclosed)">
          <button type="submit" class="btn btn--primary">Go</button>
        </div>

        <p class="fs--sm"><i>Add <code>.--line</code> to the <code>.form__enclosed</code> wrapper to remove the background and outline and add a simple border along the bottom.</i></p>
        <div class="form__enclosed --line mb--2@t">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search (.--enclosed.--line)">
          <button type="submit" class="btn --primary">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section bg--gray-700">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">
      <form action="" method="">
        <div class="form__enclosed --search --dark --line my--2@t">
          <label class="sr--only">Search</label>
          <input type="text" placeholder="Search">
          <button type="submit" class="btn">Go</button>
        </div>
      </form>
    </div>
  </div>
</section>

<section class="section">
  <div class="row">
    <div class="col --12@xs --8@lg --2-offset@lg">

      <form class="wufoo" action="#" novalidate>

        <header id="header" class="info">
          <h2>Title</h2>
          <div>Description</div>
        </header>

        <ul>
          <li class="section first">
            <section>
            <h3>Section Title</h3>
            <div>Description of the section.</div>
            </section>
          </li>

          <li class="focused">
            <label class="desc">Field Title<span class="req"> * </span></label>
            <div>
            <textarea rows="10" cols="50" class="field textarea medium">The quick brown fox jumped over the lazy dog.</textarea>
            </div>
            <p class="instruct"><small>
              Instructions for the user. Robots are typically used to do the tasks that are too dirty, dangerous, difficult, repetitive or dull for humans.
              <br /><br />Chris is Wufoo's robot.
            </small></p>
            zxcvzxcvzxcvxcvzxcvxc
          </li>

          <li>
            <label class="desc">Another Field Title<span class="req"> * </span></label>
            <div>
            <input class="field text medium" type="text" maxlength="255" value="Example text."/>
            </div>
          </li>

          <li class="section">
            <section>
            <h3>Section Title</h3>
            <div>Description of another section.</div>
            </section>
          </li>

          <li>
            <fieldset>
            <legend class="desc">Multiple Choice</legend>
            <div class="col">
              <span>
              <input class="field radio" type="radio" value="Robots" checked="checked" />
              <label class="choice">Robots</label>
              </span>
              <span>
              <input class="field radio" type="radio" value="Monkeys"/>
              <label class="choice">Monkeys</label>
              </span>
              <span>
              <input class="field radio" type="radio" value="Ninjas"/>
              <label class="choice">Ninjas</label>
              </span>
            </div>
            </fieldset>
          </li>

          <li>
            <fieldset>
            <legend class="desc">Checkboxes</legend>
            <div class="col">
              <span>
              <input class="field checkbox" type="checkbox" value="Invisibility" checked="checked" />
              <label class="choice">Invisibility</label>
              </span>
              <span>
              <input class="field checkbox" type="checkbox" value="Super Strength"/>
              <label class="choice">Super Strength</label>
              </span>
              <span>
              <input class="field checkbox" type="checkbox" value="Eye Lasers"/>
              <label class="choice">Eye Lasers</label>
              </span>
            </div>
            </fieldset>
          </li>

          <li class="section">
            <section>
            <h3>Section Title</h3>
            <div>Description of another section.</div>
            </section>
          </li>

          <li>
            <label class="desc">Name Field</label>
            <span>
            <input class="field text" size="2" value=""/>
            <label>Title</label>
            </span>
            <span>
            <input class="field text" size="8" value=""/>
            <label>First</label>
            </span>
            <span>
            <input class="field text" size="14" value=""/>
            <label>Last</label>
            </span>
            <span>
            <input class="field text" size="3" value=""/>
            <label>Suffix</label>
            </span>
          </li>

          <li>
            <label class="desc">Date Field</label>
            <span>
            <input class="field text" size="2" type="text" maxlength="2" value=""/> /
            <label>MM</label>
            </span>
            <span>
            <input class="field text" size="2" type="text" maxlength="2" value=""/> /
            <label>DD</label>
            </span>
            <span>
            <input class="field text" size="4" type="text" maxlength="4" value=""/>
            <label>YYYY</label>
            </span>
            <img src="http://wufoo.com/images/icons/calendar.png" class="icon" alt="Pick date." id="pickdate111" />
          </li>

          <li>
            <label class="desc">Time Field</label>
            <span>
            <input class="field text" size="2" type="text" maxlength="2" value=""/> :
            <label>HH</label>
            </span>
            <span>
            <input class="field text" size="2" type="text" maxlength="2" value=""/> :
            <label>MM</label>
            </span>
            <span>
            <input class="field text" size="2" type="text" maxlength="2" value=""/>
            <label>SS</label>
            </span>
            <span>
            <select class="field select" style="width:4em">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
            </select>
            <label>AM/PM</label>
            </span>
          </li>

          <li>
            <label class="desc">Phone Field</label>
            <span>
            <input class="field text" type="tel" size="3" maxlength="3" value=""/> -
            <label>###</label>
            </span>
            <span>
            <input class="field text" type="tel" size="3" maxlength="3" value=""/> -
            <label>###</label>
            </span>
            <span>
            <input class="field text" type="tel" size="4" maxlength="4" value=""/>
            <label>####</label>
            </span>
          </li>

          <li>
            <label class="desc">Currency Field</label>
            <span>&#36;</span>
            <span>
            <input class="field text currency nospin" type="number" size="10" value=""/> .
            <label>Dollars</label>
            </span>
            <span>
            <input class="field text nospin" size="2" type="number" maxlength="2" value=""/>
            <label>Cents</label>
            </span>
          </li>

          <li class="complex">
            <label class="desc">Address Field</label>
            <div>
            <span class="full">
            <input class="field text addr" type="text" value="" />
            <label>Street Address</label>
            </span>
            <span class="full">
            <input class="field text addr" type="text" value="" />
            <label>Address Line 2</label>
            </span>
            <span class="left">
            <input class="field text addr" type="text" value="" />
            <label>City</label>
            </span>
            <span class="right">
            <input class="field text addr" type="text" value="" />
            <label>State / Province / Region</label>
            </span>
            <span class="left">
            <input class="field text addr" type="text"  maxlength="15" value="" />
            <label>Postal / Zip Code</label>
            </span>
            <span class="right">
            <select class="field select addr">
              <option value="" selected="selected"></option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="Andorra">Andorra</option>
            </select>
            <label>Country</label>
            </span>
            </div>
          </li>

          <li>
            <label class="desc">Website Field</label>
            <div>
              <input class="field text large" type="url" maxlength="255" value="http://"/>
            </div>
          </li>

          <li>
            <label class="desc">Email Field</label>
            <div>
              <input class="field text medium" type="email" maxlength="255" value=""/>
            </div>
          </li>

          <li class="complex">
            <label class="desc">File Upload Field</label>
            <div>
              <span class="full">
                <input class="field file" type="file" value=""/>
              </span>
            </div>
          </li>

          <li class="buttons">
            <input id="saveForm" class="btTxt submit" type="submit" value="Submit" onclick="return false" />
          </li>
        </ul>
      </form>
    </div>
  </div>
</section>