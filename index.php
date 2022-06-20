<?php
$is_home = true;
require_once('./inc/head.php') ?>

<main>
<h1>Timeline with CSS & JS</h1>
    <section>
      <h3>showTime()</h3>
      <p>
        paramenter: html element(preferably : li)
        <br />
        this function is used to set "done" attribute to the element passed as
        parameter , then change the time line point's background (color) . Then
        make the date visible by increasing the opacity. Also increase the
        content's (p) opacity & translate it back to its original size.
      </p>
    </section>
    <section>
      <h3>hideTime()</h3>
      <p>
        paramenter: html element(preferably : li)
        <br />
        this function is used to remove "done" attribute to the element passed
        as parameter , then change the time line point's background (color) back
        to grey .Then make the date hidden by decreasing the opacity. Also
        decrease the content's (p) opacity & translate it back to its initial
        size.
      </p>
    </section>
    <section>
      <p>
        <strong>Active timeline event </strong> are those whose date & content
        are visible & has timeline is crossing / passing it.
        <br />
        <strong>Inactive timeline event </strong> are those whose date & content
        are invisible & timeline is not crossing or passing it
      </p>
      <p>
        For all timeline Events , whenever each timeline event is clicked then
        at first we check whether the time line event is already active or not,
        <br />
        if active:
        <br />
        first set the timeline progress such that the time line is not crossing
        / passing the point ( to do that we pass the index of that point & when
        that index is divided by total number of events which results in a
        percentage which makes the timeline's length less than the point).
        <br />
        then for each time line events we compare that event's index with the
        event we clicked , for all the events whose index are more than or equal
        to the event we clicked we hide those events !
        <br />
        if inactive:
        <br />
        first set the timeline progress such that the time line is crossing /
        passing the point ( to do that we pass the (index + 1) of that point &
        when that index is divided by total number of events which results in a
        percentage which makes the timeline's length more than the point).
        <br />
        then for each time line events we compare that event's index with the
        event we clicked , for all the events whose index are less than or equal
        to the event we clicked we show those events !
        <br />
      </p>
    </section>
    <section>
      <p>
        <strong> slowLoop() </strong> is used to slow down the transition of
        timeline progress . For that we dont use any loops rather use recursion.
        We initialize a variable out side the function (i = 0); Then leverage
        the setTimeout function for 800 ms. So inside the setTimeout , we show
        the timeline event in that index(i) then progress the timeline. Then
        increment the i by 1.Then check if i is less than timeline events'
        length only then call it once again.
      </p>
    </section>
    <section>
      <p>
        <strong> timeline progress function</strong>
        <br />
        it takes any value as parameter then divides it with the total no. of
        events & then multiply it with 100. Then set it to the timeline's width
        or height depending on the breakpoint matched or not. Also we set the
        height or width constant so that when we resize we dont experience
        abnormal behaviour!!
      </p>
    </section>

    <section class="timeline">
      <div class="timeline-line">
        <span class="timeline-innerline"></span>
      </div>

      <ul>
        <li>
          <span class="timeline-point"></span>
          <span class="date">2000</span>
          <p>Lorem, ipsum dolor sit amet</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date">2005</span>
          <p>Lorem, ipsum dolor sit amet</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date">2010</span>
          <p>Lorem, ipsum dolor sit amet</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date">2015</span>
          <p>Lorem, ipsum dolor sit amet</p>
        </li>
        <li>
          <span class="timeline-point"></span>
          <span class="date">2020</span>
          <p>Lorem, ipsum dolor sit amet</p>
        </li>
      </ul>
    </section>
    <section>
      <h>For more info watch this : </h>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/yExvFZNYxcY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
</main>

<?php require_once('./inc/footer.php') ?>