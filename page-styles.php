<?php
/**
 * The template for displaying Twitter Bootstrap Styles.
 *
 * @package StormBringer
 * @since StormBringer 0.0.1
 *
 * Template Name: Styles
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content" role="main">

<?php stormbringer_breadcrumb();?>

<?php if (have_posts()) : the_post(); ?>
  <?php $format = get_post_format();
  if (false === $format)
    $format = 'standard';
  get_template_part('content', 'page');
  ?>
  <?php endif;?>


  <?php //@TODO: insert new docs;?>
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="type">Typography</h1>
</div>

<!-- Headings -->
<h2 id="type-headings">Headings</h2>
<p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
<div class="bs-example bs-example-type">
  <table class="table">
    <tbody>
    <tr>
      <td><h1>h1. Bootstrap heading</h1></td>
      <td class="info">Semibold 36px</td>
    </tr>
    <tr>
      <td><h2>h2. Bootstrap heading</h2></td>
      <td class="info">Semibold 30px</td>
    </tr>
    <tr>
      <td><h3>h3. Bootstrap heading</h3></td>
      <td class="info">Semibold 24px</td>
    </tr>
    <tr>
      <td><h4>h4. Bootstrap heading</h4></td>
      <td class="info">Semibold 18px</td>
    </tr>
    <tr>
      <td><h5>h5. Bootstrap heading</h5></td>
      <td class="info">Semibold 14px</td>
    </tr>
    <tr>
      <td><h6>h6. Bootstrap heading</h6></td>
      <td class="info">Semibold 12px</td>
    </tr>
    </tbody>
  </table>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
      <span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span>
    </code></pre></div>

<p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
<div class="bs-example bs-example-type">
  <table class="table">
    <tbody>
    <tr>
      <td><h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
    </tr>
    <tr>
      <td><h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
    </tr>
    <tr>
      <td><h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
    </tr>
    <tr>
      <td><h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
    </tr>
    <tr>
      <td><h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
    </tr>
    <tr>
      <td><h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
    </tr>
    </tbody>
  </table>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
      <span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
      <span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
      <span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
      <span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
      <span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
    </code></pre></div>


<!-- Body copy -->
<h2 id="type-body-copy">Body copy</h2>
<p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
<div class="bs-example">
  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
  <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
    </code></pre></div>

<!-- Body copy .lead -->
<h3>Lead body copy</h3>
<p>Make a paragraph stand out by adding <code>.lead</code>.</p>
<div class="bs-example">
  <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
    </code></pre></div>

<!-- Using LESS -->
<h3>Built with Less</h3>
<p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>


<!-- Emphasis -->
<h2 id="type-emphasis">Emphasis</h2>
<p>Make use of HTML's default emphasis tags with lightweight styles.</p>

<h3>Small text</h3>
<p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
<p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code></p>
<div class="bs-example">
  <p><small>This line of text is meant to be treated as fine print.</small></p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span>
    </code></pre></div>


<h3>Bold</h3>
<p>For emphasizing a snippet of text with a heavier font-weight.</p>
<div class="bs-example">
  <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span>
    </code></pre></div>

<h3>Italics</h3>
<p>For emphasizing a snippet of text with italics.</p>
<div class="bs-example">
  <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span>
    </code></pre></div>

<div class="bs-callout bs-callout-info">
  <h4>Alternate elements</h4>
  <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
</div>

<h3>Alignment classes</h3>
<p>Easily realign text to components with text alignment classes.</p>
<div class="bs-example">
  <p class="text-left">Left aligned text.</p>
  <p class="text-center">Center aligned text.</p>
  <p class="text-right">Right aligned text.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
    </code></pre></div>

<h3>Emphasis classes</h3>
<p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
<div class="bs-example">
  <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
  <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
  <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
  <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
  <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
  <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
    </code></pre></div>
<div class="bs-callout bs-callout-info">
  <h4>Dealing with specificity</h4>
  <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
</div>


<!-- Abbreviations -->
<h2 id="type-abbreviations">Abbreviations</h2>
<p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

<h3>Basic abbreviation</h3>
<p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code> element.</p>
<div class="bs-example">
  <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span>
    </code></pre></div>

<h3>Initialism</h3>
<p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
<div class="bs-example">
  <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span>
    </code></pre></div>


<!-- Addresses -->
<h2 id="type-addresses">Addresses</h2>
<p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
<div class="bs-example">
  <address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890
  </address>
  <address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">first.last@example.com</a>
  </address>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
      <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
      795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
      San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
      <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
      <span class="nt">&lt;/address&gt;</span>

      <span class="nt">&lt;address&gt;</span>
      <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/address&gt;</span>
    </code></pre></div>


<!-- Blockquotes -->
<h2 id="type-blockquotes">Blockquotes</h2>
<p>For quoting blocks of content from another source within your document.</p>

<h3>Default blockquote</h3>
<p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
<div class="bs-example">
  <blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  </blockquote>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/blockquote&gt;</span>
    </code></pre></div>

<h3>Blockquote options</h3>
<p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

<h4>Naming a source</h4>
<p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
<div class="bs-example">
  <blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
  </blockquote>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;small&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/small&gt;</span>
      <span class="nt">&lt;/blockquote&gt;</span>
    </code></pre></div>

<h4>Alternate displays</h4>
<p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
<div class="bs-example" style="overflow: hidden;">
  <blockquote class="pull-right">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
  </blockquote>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/blockquote&gt;</span>
    </code></pre></div>


<!-- Lists -->
<h2 id="type-lists">Lists</h2>

<h3>Unordered</h3>
<p>A list of items in which the order does <em>not</em> explicitly matter.</p>
<div class="bs-example">
  <ul>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit
      <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
      </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
  </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
      <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    </code></pre></div>

<h3>Ordered</h3>
<p>A list of items in which the order <em>does</em> explicitly matter.</p>
<div class="bs-example">
  <ol>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit</li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
  </ol>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ol&gt;</span>
      <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ol&gt;</span>
    </code></pre></div>

<h3>Unstyled</h3>
<p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
<div class="bs-example">
  <ul class="list-unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit
      <ul>
        <li>Phasellus iaculis neque</li>
        <li>Purus sodales ultricies</li>
        <li>Vestibulum laoreet porttitor sem</li>
        <li>Ac tristique libero volutpat at</li>
      </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
  </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    </code></pre></div>

<h3>Inline</h3>
<p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
<div class="bs-example">
  <ul class="list-inline">
    <li>Lorem ipsum</li>
    <li>Phasellus iaculis</li>
    <li>Nulla volutpat</li>
  </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    </code></pre></div>

<h3>Description</h3>
<p>A list of terms with their associated descriptions.</p>
<div class="bs-example">
  <dl>
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
  </dl>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
      <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
      <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
      <span class="nt">&lt;/dl&gt;</span>
    </code></pre></div>

<h4>Horizontal description</h4>
<p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
<div class="bs-example">
  <dl class="dl-horizontal">
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    <dt>Felis euismod semper eget lacinia</dt>
    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
  </dl>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
      <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
      <span class="nt">&lt;/dl&gt;</span>
    </code></pre></div>

<div class="bs-callout bs-callout-info">
  <h4>Auto-truncating</h4>
  <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
</div>
</div>
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="code">Code</h1>
    </div>

    <h2>Inline</h2>
    <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
    <div class="bs-example">
      For example, <code>&lt;section&gt;</code> should be wrapped as inline.
    </div>
    <div class="highlight"><pre><code class="html">For example, <span class="nt">&lt;code&gt;</span><span class="ni">&amp;lt;</span>section<span class="ni">&amp;gt;</span><span class="nt">&lt;/code&gt;</span> should be wrapped as inline.
        </code></pre></div>

    <h2>Basic block</h2>
    <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
    <div class="bs-example">
      <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;pre&gt;</span><span class="ni">&amp;lt;</span>p<span class="ni">&amp;gt;</span>Sample text here...<span class="ni">&amp;lt;</span>/p<span class="ni">&amp;gt;</span><span class="nt">&lt;/pre&gt;</span>
        </code></pre></div>

    <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
  </div>

<div class="bs-docs-section">
<div class="page-header">
  <h1 id="tables">Tables</h1>
</div>

<h2 id="tables-example">Basic example</h2>
<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
<div class="bs-example">
  <table class="table">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
    </code></pre></div>


<h2 id="tables-striped">Striped rows</h2>
<p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
<div class="bs-callout bs-callout-danger">
  <h4>Cross-browser compatibility</h4>
  <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
</div>
<div class="bs-example">
  <table class="table table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
    </code></pre></div>


<h2 id="tables-bordered">Bordered table</h2>
<p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
<div class="bs-example">
  <table class="table table-bordered">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td rowspan="2">1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@TwBootstrap</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
    </code></pre></div>


<h2 id="tables-hover-rows">Hover rows</h2>
<p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
<div class="bs-example">
  <table class="table table-hover">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
    </code></pre></div>


<h2 id="tables-condensed">Condensed table</h2>
<p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
<div class="bs-example">
  <table class="table table-condensed">
    <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-condensed"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
    </code></pre></div>


<h2 id="tables-contextual-classes">Contextual classes</h2>
<p>Use contextual classes to color table rows or individual cells.</p>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <colgroup>
      <col class="col-xs-1">
      <col class="col-xs-7">
    </colgroup>
    <thead>
    <tr>
      <th>Class</th>
      <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>
        <code>.active</code>
      </td>
      <td>Applies the hover color to a particular row or cell</td>
    </tr>
    <tr>
      <td>
        <code>.success</code>
      </td>
      <td>Indicates a successful or positive action</td>
    </tr>
    <tr>
      <td>
        <code>.warning</code>
      </td>
      <td>Indicates a warning that might need attention</td>
    </tr>
    <tr>
      <td>
        <code>.danger</code>
      </td>
      <td>Indicates a dangerous or potentially negative action</td>
    </tr>
    </tbody>
  </table>
</div>
<div class="bs-example">
  <table class="table">
    <thead>
    <tr>
      <th>#</th>
      <th>Column heading</th>
      <th>Column heading</th>
      <th>Column heading</th>
    </tr>
    </thead>
    <tbody>
    <tr class="active">
      <td>1</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="success">
      <td>3</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="warning">
      <td>5</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="danger">
      <td>7</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    </tbody>
  </table>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- On rows --&gt;</span>
      <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

      <span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
    </code></pre></div>


<h2 id="tables-responsive">Responsive tables</h2>
<p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
<div class="bs-example">
  <div class="table-responsive">
    <table class="table">
      <thead>
      <tr>
        <th>#</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>#</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

</div>

<div class="bs-docs-section">
<div class="page-header">
  <h1 id="forms">Forms</h1>
</div>

<h2 id="forms-example">Basic example</h2>
<p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
<div class="bs-example">
  <form role="form">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">role=</span><span class="s">"form"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>Example block-level help text here.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    </code></pre></div>


<h2 id="forms-inline">Inline form</h2>
<p>Add <code>.form-inline</code> for left-aligned and inline-block controls for a compact layout.</p>
<div class="bs-callout bs-callout-danger">
  <h4>Requires custom widths</h4>
  <p>Inputs, selects, and textareas are 100% wide by default in Bootstrap. To use the inline form, you'll have to set a width on the form controls used within.</p>
</div>
<div class="bs-callout bs-callout-danger">
  <h4>Always add labels</h4>
  <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class.</p>
</div>
<div class="bs-example">
  <form class="form-inline" role="form">
    <div class="form-group">
      <label class="sr-only" for="exampleInputEmail2">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label class="sr-only" for="exampleInputPassword2">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-default">Sign in</button>
  </form>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span> <span class="na">role=</span><span class="s">"form"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword2"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    </code></pre></div>


<h2 id="forms-horizontal">Horizontal form</h2>
<p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
<div class="bs-example">
  <form class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="">
        <button type="submit" class="btn btn-default">Sign in</button>
      </div>
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span> <span class="na">role=</span><span class="s">"form"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    </code></pre></div>


<h2 id="forms-controls">Supported controls</h2>
<p>Examples of standard form controls supported in an example form layout.</p>

<h3>Inputs</h3>
<p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
<div class="bs-callout bs-callout-danger">
  <h4>Type declaration required</h4>
  <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
</div>
<div class="bs-example">
  <form role="form">
    <input type="text" class="form-control" placeholder="Text input">
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span>
    </code></pre></div>
<div class="bs-callout bs-callout-info">
  <h4>Input groups</h4>
  <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the input group component</a>.</p>
</div>

<h3>Textarea</h3>
<p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
<div class="bs-example">
  <form role="form">
    <textarea class="form-control" rows="3"></textarea>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    </code></pre></div>

<h3>Checkboxes and radios</h3>
<p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
<h4>Default (stacked)</h4>
<div class="bs-example">
  <form role="form">
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Option one is this and that—be sure to include why it's great
      </label>
    </div>
    <br>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
        Option one is this and that—be sure to include why it's great
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
      Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
      Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
      Option two can be something else and selecting it will deselect option one
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h4>Inline checkboxes</h4>
<p>Use <code>.checkbox-inline</code> or <code>.radio-inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
<div class="bs-example">
  <form role="form">
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
      <span class="nt">&lt;/label&gt;</span>
    </code></pre></div>

<h3>Selects</h3>
<p>Use the default option, or add <code>multiple</code> to show multiple options at once.</p>
<div class="bs-example">
  <form role="form">
    <select class="form-control">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <br>
    <select multiple="" class="form-control">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>

      <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    </code></pre></div>


<h2 id="forms-controls-static">Static control</h2>
<p>When you need to place plain text next to a form label within a horizontal form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
<div class="bs-example">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <p class="form-control-static">email@example.com</p>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span> <span class="na">role=</span><span class="s">"form"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    </code></pre></div>


<h2 id="forms-control-states">Form states</h2>
<p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>

<h3 id="forms-input-focus">Input focus</h3>
<p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
<div class="bs-example">
  <form role="form">
    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
  </form>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"focusedInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"This is focused..."</span><span class="nt">&gt;</span>
    </code></pre></div>

<h3 id="forms-disabled-inputs">Disabled inputs</h3>
<p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>
<div class="bs-example">
  <form role="form">
    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    </code></pre></div>

<h3 id="forms-disabled-fieldsets">Disabled fieldsets</h3>
<p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>

<div class="bs-callout bs-callout-warning">
  <h4>Link functionality of <code>&lt;a&gt;</code> not impacted</h4>
  <p>This class will only change the appearance of <code>&lt;a class="btn btn-default"&gt;</code> buttons, not their functionality. Use custom JavaScript to disable links here.</p>
</div>

<div class="bs-callout bs-callout-danger">
  <h4>Cross-browser compatibility</h4>
  <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 9 and below don't actually support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
</div>

<div class="bs-example">
  <form role="form">
    <fieldset disabled="">
      <div class="form-group">
        <label for="disabledTextInput">Disabled input</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
      </div>
      <div class="form-group">
        <label for="disabledSelect">Disabled select menu</label>
        <select id="disabledSelect" class="form-control">
          <option>Disabled select</option>
        </select>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Can't check this
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">role=</span><span class="s">"form"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/fieldset&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    </code></pre></div>

<h3 id="forms-validation">Validation states</h3>
<p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>

<div class="bs-example">
  <form role="form">
    <div class="form-group has-success">
      <label class="control-label" for="inputSuccess">Input with success</label>
      <input type="text" class="form-control" id="inputSuccess">
    </div>
    <div class="form-group has-warning">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning">
    </div>
    <div class="form-group has-error">
      <label class="control-label" for="inputError">Input with error</label>
      <input type="text" class="form-control" id="inputError">
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>


<h2 id="forms-control-sizes">Control sizing</h2>
<p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>

<h3>Height sizing</h3>
<p>Create larger or smaller form controls that match button sizes.</p>
<div class="bs-example bs-example-control-sizing">
  <form role="form">
    <div class="controls">
      <input class="form-control input-lg" type="text" placeholder=".input-lg">
      <input type="text" class="form-control" placeholder="Default input">
      <input class="form-control input-sm" type="text" placeholder=".input-sm">

      <select class="form-control input-lg">
        <option value="">.input-lg</option>
      </select>
      <select class="form-control">
        <option value="">Default select</option>
      </select>
      <select class="form-control input-sm">
        <option value="">.input-sm</option>
      </select>
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-lg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-sm"</span><span class="nt">&gt;</span>

      <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
    </code></pre></div>

<h3>Column sizing</h3>
<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
<div class="bs-example">
  <form role="form">
    <div class="row">
      <div class="col-xs-2">
        <input type="text" class="form-control" placeholder=".col-xs-2">
      </div>
      <div class="col-xs-3">
        <input type="text" class="form-control" placeholder=".col-xs-3">
      </div>
      <div class="col-xs-4">
        <input type="text" class="form-control" placeholder=".col-xs-4">
      </div>
    </div>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h2 id="forms-help-text">Help text</h2>
<p>Block level help text for form controls.</p>
<div class="bs-example">
  <form role="form">
    <input type="text" class="form-control">
    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
  </form>
</div><!-- /.bs-example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span>
    </code></pre></div>

</div>

<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="buttons">Buttons</h1>
  </div>

  <h2 id="buttons-options">Options</h2>
  <p>Use any of the available button classes to quickly create a styled button.</p>
  <div class="bs-example">
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
  </div>
  <div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Standard button --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

        <span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span>
      </code></pre></div>

  <h2 id="buttons-sizes">Sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
  <div class="bs-example">
    <p>
      <button type="button" class="btn btn-primary btn-lg">Large button</button>
      <button type="button" class="btn btn-default btn-lg">Large button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary">Default button</button>
      <button type="button" class="btn btn-default">Default button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary btn-sm">Small button</button>
      <button type="button" class="btn btn-default btn-sm">Small button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
      <button type="button" class="btn btn-default btn-xs">Extra small button</button>
    </p>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-xs"</span><span class="nt">&gt;</span>Extra small button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs"</span><span class="nt">&gt;</span>Extra small button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
      </code></pre></div>

  <p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>
  <div class="bs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
      <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
      <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
      </code></pre></div>


  <h2 id="buttons-active">Active state</h2>
  <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> <code>&lt;button&gt;</code>s should you need to replicate the active state progammatically.</p>

  <h3>Button element</h3>
  <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
  <p class="bs-example">
    <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
    <button type="button" class="btn btn-default btn-lg active">Button</button>
  </p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
      </code></pre></div>

  <h3>Anchor element</h3>
  <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
  </p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      </code></pre></div>


  <h2 id="buttons-disabled">Disabled state</h2>
  <p>Make buttons look unclickable by fading them back 50%.</p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class="bs-example">
    <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
  </p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
      </code></pre></div>

  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
  </div>

  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
  </p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      </code></pre></div>
  <p>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
  </p>
  <div class="bs-callout bs-callout-warning">
    <h4>Link functionality not impacted</h4>
    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
  </div>
  <div class="bs-callout bs-callout-warning">
    <h4>Context-specific usage</h4>
    <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
  </div>


  <h2 id="buttons-tags">Button tags</h2>
  <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
  <form class="bs-example">
    <a class="btn btn-default" href="#" role="button">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
  </form>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span>
      </code></pre></div>

  <div class="bs-callout bs-callout-warning">
    <h4>Cross-browser rendering</h4>
    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
    <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
  </div>

</div>

<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="images">Images</h1>
  </div>

  <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
  </div>
  <div class="bs-example bs-example-images">
    <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAErUlEQVR4Xu3YwStscRjG8d8QQnZEFkqyY6NE/n0rlOxkS1ZqrCiFe/udOtPcue6YJ889Gc93Vtz7eo/3eT/9zjl6/X7/V+FDAhMm0APMhElR1iQAGCBICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpgakH8/7+Xs7Ozsrz83M5OTkpi4uLfwRwd3dXbm5uyvr6etnf32/+r9/vl6urq1J/tn729vbKxsbGRMF1fb2JfqkOi6YazOvrazk9PS1vb2+l1+v9BaZd7tPT0wBM+zNLS0vl6OioXF5eNtjq13Nzc2Oj7/p6HTqY+FJTC2Z4eXXaj8BcX1+Xh4eHUmvX1taaE6Y9cba3t8vOzs7g+3rKzM/PNyfP8vJyA6j+/P39fXMCra6uDnC6rjfpqTbxNjsonGowFxcX5eDgYHBKDN+S2tvO1tZWub29/RRMC6ieOI+Pj+X4+Licn5+X9iSq6P7H9TrYsfUSUwumTeGjZ4r232ZmZsru7m5zarQnTHtqjJ4w7feT3naGn5m+cj3rNjto9iPBDN9K2tvMZ7ekFkzNvJ4y9YQaflAeB/Sr1+tgz7ZL/DgwCwsLzVtTfdAd/aysrJTNzc3mremjZ5j6TNHeyuoD8MvLy19vUKMn2levZ9tkR41+HJjR1+oWQHvCjHtLmp2dbbDVt67Dw8PmpKlfD79BffZarVzvs7eyjgxIl4kDM+7vMP96vhm+Nalgxl1P2tQ3KZ56MN8kx5hfAzAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gz6G1HzSbXtC7t7AAAAAElFTkSuQmCC">
    <img data-src="holder.js/140x140" class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAErUlEQVR4Xu3YwStscRjG8d8QQnZEFkqyY6NE/n0rlOxkS1ZqrCiFe/udOtPcue6YJ889Gc93Vtz7eo/3eT/9zjl6/X7/V+FDAhMm0APMhElR1iQAGCBICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpgakH8/7+Xs7Ozsrz83M5OTkpi4uLfwRwd3dXbm5uyvr6etnf32/+r9/vl6urq1J/tn729vbKxsbGRMF1fb2JfqkOi6YazOvrazk9PS1vb2+l1+v9BaZd7tPT0wBM+zNLS0vl6OioXF5eNtjq13Nzc2Oj7/p6HTqY+FJTC2Z4eXXaj8BcX1+Xh4eHUmvX1taaE6Y9cba3t8vOzs7g+3rKzM/PNyfP8vJyA6j+/P39fXMCra6uDnC6rjfpqTbxNjsonGowFxcX5eDgYHBKDN+S2tvO1tZWub29/RRMC6ieOI+Pj+X4+Licn5+X9iSq6P7H9TrYsfUSUwumTeGjZ4r232ZmZsru7m5zarQnTHtqjJ4w7feT3naGn5m+cj3rNjto9iPBDN9K2tvMZ7ekFkzNvJ4y9YQaflAeB/Sr1+tgz7ZL/DgwCwsLzVtTfdAd/aysrJTNzc3mremjZ5j6TNHeyuoD8MvLy19vUKMn2levZ9tkR41+HJjR1+oWQHvCjHtLmp2dbbDVt67Dw8PmpKlfD79BffZarVzvs7eyjgxIl4kDM+7vMP96vhm+Nalgxl1P2tQ3KZ56MN8kx5hfAzAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gz6G1HzSbXtC7t7AAAAAElFTkSuQmCC">
    <img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAErUlEQVR4Xu3YwStscRjG8d8QQnZEFkqyY6NE/n0rlOxkS1ZqrCiFe/udOtPcue6YJ889Gc93Vtz7eo/3eT/9zjl6/X7/V+FDAhMm0APMhElR1iQAGCBICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpAcBIcVEMGAxICQBGiotiwGBASgAwUlwUAwYDUgKAkeKiGDAYkBIAjBQXxYDBgJQAYKS4KAYMBqQEACPFRTFgMCAlABgpLooBgwEpgakH8/7+Xs7Ozsrz83M5OTkpi4uLfwRwd3dXbm5uyvr6etnf32/+r9/vl6urq1J/tn729vbKxsbGRMF1fb2JfqkOi6YazOvrazk9PS1vb2+l1+v9BaZd7tPT0wBM+zNLS0vl6OioXF5eNtjq13Nzc2Oj7/p6HTqY+FJTC2Z4eXXaj8BcX1+Xh4eHUmvX1taaE6Y9cba3t8vOzs7g+3rKzM/PNyfP8vJyA6j+/P39fXMCra6uDnC6rjfpqTbxNjsonGowFxcX5eDgYHBKDN+S2tvO1tZWub29/RRMC6ieOI+Pj+X4+Licn5+X9iSq6P7H9TrYsfUSUwumTeGjZ4r232ZmZsru7m5zarQnTHtqjJ4w7feT3naGn5m+cj3rNjto9iPBDN9K2tvMZ7ekFkzNvJ4y9YQaflAeB/Sr1+tgz7ZL/DgwCwsLzVtTfdAd/aysrJTNzc3mremjZ5j6TNHeyuoD8MvLy19vUKMn2levZ9tkR41+HJjR1+oWQHvCjHtLmp2dbbDVt67Dw8PmpKlfD79BffZarVzvs7eyjgxIl4kDM+7vMP96vhm+Nalgxl1P2tQ3KZ56MN8kx5hfAzAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gwKGE+OMV0AE7Nqz6CA8eQY0wUwMav2DAoYT44xXQATs2rPoIDx5BjTBTAxq/YMChhPjjFdABOzas+ggPHkGNMFMDGr9gz6G1HzSbXtC7t7AAAAAElFTkSuQmCC">
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-rounded"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span>
      </code></pre></div>

  <div class="bs-callout bs-callout-warning">
    <h4>Responsive images</h4>
    <p>Looking for how to make images more responsive? <a href="#overview-responsive-images">Check out the responsive images section</a> up top.</p>
  </div>

</div>

<!-- Glyphicons
  ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="glyphicons">Glyphicons</h1>
</div>

<h2 id="glyphicons-glyphs">Available glyphs</h2>
<p>Includes 200 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you to include a link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.</p>
<ul class="bs-glyphicons">
<li>
  <span class="glyphicon glyphicon-adjust"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-adjust</span>
</li>
<li>
  <span class="glyphicon glyphicon-align-center"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-align-center</span>
</li>
<li>
  <span class="glyphicon glyphicon-align-justify"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-align-justify</span>
</li>
<li>
  <span class="glyphicon glyphicon-align-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-align-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-align-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-align-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-arrow-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-arrow-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-arrow-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-arrow-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-arrow-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-arrow-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-arrow-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-arrow-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-asterisk"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-asterisk</span>
</li>
<li>
  <span class="glyphicon glyphicon-backward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-backward</span>
</li>
<li>
  <span class="glyphicon glyphicon-ban-circle"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-ban-circle</span>
</li>
<li>
  <span class="glyphicon glyphicon-barcode"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-barcode</span>
</li>
<li>
  <span class="glyphicon glyphicon-bell"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-bell</span>
</li>
<li>
  <span class="glyphicon glyphicon-bold"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-bold</span>
</li>
<li>
  <span class="glyphicon glyphicon-book"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-book</span>
</li>
<li>
  <span class="glyphicon glyphicon-bookmark"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-bookmark</span>
</li>
<li>
  <span class="glyphicon glyphicon-briefcase"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-briefcase</span>
</li>
<li>
  <span class="glyphicon glyphicon-bullhorn"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-bullhorn</span>
</li>
<li>
  <span class="glyphicon glyphicon-calendar"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-calendar</span>
</li>
<li>
  <span class="glyphicon glyphicon-camera"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-camera</span>
</li>
<li>
  <span class="glyphicon glyphicon-certificate"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-certificate</span>
</li>
<li>
  <span class="glyphicon glyphicon-check"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-check</span>
</li>
<li>
  <span class="glyphicon glyphicon-chevron-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-chevron-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-chevron-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-chevron-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-chevron-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-chevron-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-circle-arrow-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-circle-arrow-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-circle-arrow-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-circle-arrow-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-circle-arrow-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-circle-arrow-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-circle-arrow-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-circle-arrow-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-cloud"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-cloud</span>
</li>
<li>
  <span class="glyphicon glyphicon-cloud-download"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-cloud-download</span>
</li>
<li>
  <span class="glyphicon glyphicon-cloud-upload"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-cloud-upload</span>
</li>
<li>
  <span class="glyphicon glyphicon-cog"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-cog</span>
</li>
<li>
  <span class="glyphicon glyphicon-collapse-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-collapse-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-collapse-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-collapse-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-comment"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-comment</span>
</li>
<li>
  <span class="glyphicon glyphicon-compressed"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-compressed</span>
</li>
<li>
  <span class="glyphicon glyphicon-copyright-mark"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-copyright-mark</span>
</li>
<li>
  <span class="glyphicon glyphicon-credit-card"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-credit-card</span>
</li>
<li>
  <span class="glyphicon glyphicon-cutlery"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-cutlery</span>
</li>
<li>
  <span class="glyphicon glyphicon-dashboard"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-dashboard</span>
</li>
<li>
  <span class="glyphicon glyphicon-download"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-download</span>
</li>
<li>
  <span class="glyphicon glyphicon-download-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-download-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-earphone"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-earphone</span>
</li>
<li>
  <span class="glyphicon glyphicon-edit"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-edit</span>
</li>
<li>
  <span class="glyphicon glyphicon-eject"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-eject</span>
</li>
<li>
  <span class="glyphicon glyphicon-envelope"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-envelope</span>
</li>
<li>
  <span class="glyphicon glyphicon-euro"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-euro</span>
</li>
<li>
  <span class="glyphicon glyphicon-exclamation-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-exclamation-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-expand"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-expand</span>
</li>
<li>
  <span class="glyphicon glyphicon-export"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-export</span>
</li>
<li>
  <span class="glyphicon glyphicon-eye-close"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-eye-close</span>
</li>
<li>
  <span class="glyphicon glyphicon-eye-open"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-eye-open</span>
</li>
<li>
  <span class="glyphicon glyphicon-facetime-video"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-facetime-video</span>
</li>
<li>
  <span class="glyphicon glyphicon-fast-backward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-fast-backward</span>
</li>
<li>
  <span class="glyphicon glyphicon-fast-forward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-fast-forward</span>
</li>
<li>
  <span class="glyphicon glyphicon-file"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-file</span>
</li>
<li>
  <span class="glyphicon glyphicon-film"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-film</span>
</li>
<li>
  <span class="glyphicon glyphicon-filter"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-filter</span>
</li>
<li>
  <span class="glyphicon glyphicon-fire"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-fire</span>
</li>
<li>
  <span class="glyphicon glyphicon-flag"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-flag</span>
</li>
<li>
  <span class="glyphicon glyphicon-flash"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-flash</span>
</li>
<li>
  <span class="glyphicon glyphicon-floppy-disk"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-floppy-disk</span>
</li>
<li>
  <span class="glyphicon glyphicon-floppy-open"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-floppy-open</span>
</li>
<li>
  <span class="glyphicon glyphicon-floppy-remove"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-floppy-remove</span>
</li>
<li>
  <span class="glyphicon glyphicon-floppy-save"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-floppy-save</span>
</li>
<li>
  <span class="glyphicon glyphicon-floppy-saved"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-floppy-saved</span>
</li>
<li>
  <span class="glyphicon glyphicon-folder-close"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-folder-close</span>
</li>
<li>
  <span class="glyphicon glyphicon-folder-open"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-folder-open</span>
</li>
<li>
  <span class="glyphicon glyphicon-font"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-font</span>
</li>
<li>
  <span class="glyphicon glyphicon-forward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-forward</span>
</li>
<li>
  <span class="glyphicon glyphicon-fullscreen"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-fullscreen</span>
</li>
<li>
  <span class="glyphicon glyphicon-gbp"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-gbp</span>
</li>
<li>
  <span class="glyphicon glyphicon-gift"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-gift</span>
</li>
<li>
  <span class="glyphicon glyphicon-glass"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-glass</span>
</li>
<li>
  <span class="glyphicon glyphicon-globe"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-globe</span>
</li>
<li>
  <span class="glyphicon glyphicon-hand-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hand-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-hand-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hand-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-hand-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hand-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-hand-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hand-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-hd-video"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hd-video</span>
</li>
<li>
  <span class="glyphicon glyphicon-hdd"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-hdd</span>
</li>
<li>
  <span class="glyphicon glyphicon-header"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-header</span>
</li>
<li>
  <span class="glyphicon glyphicon-headphones"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-headphones</span>
</li>
<li>
  <span class="glyphicon glyphicon-heart"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-heart</span>
</li>
<li>
  <span class="glyphicon glyphicon-heart-empty"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-heart-empty</span>
</li>
<li>
  <span class="glyphicon glyphicon-home"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-home</span>
</li>
<li>
  <span class="glyphicon glyphicon-import"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-import</span>
</li>
<li>
  <span class="glyphicon glyphicon-inbox"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-inbox</span>
</li>
<li>
  <span class="glyphicon glyphicon-indent-left"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-indent-left</span>
</li>
<li>
  <span class="glyphicon glyphicon-indent-right"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-indent-right</span>
</li>
<li>
  <span class="glyphicon glyphicon-info-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-info-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-italic"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-italic</span>
</li>
<li>
  <span class="glyphicon glyphicon-leaf"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-leaf</span>
</li>
<li>
  <span class="glyphicon glyphicon-link"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-link</span>
</li>
<li>
  <span class="glyphicon glyphicon-list"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-list</span>
</li>
<li>
  <span class="glyphicon glyphicon-list-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-list-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-lock"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-lock</span>
</li>
<li>
  <span class="glyphicon glyphicon-log-in"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-log-in</span>
</li>
<li>
  <span class="glyphicon glyphicon-log-out"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-log-out</span>
</li>
<li>
  <span class="glyphicon glyphicon-magnet"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-magnet</span>
</li>
<li>
  <span class="glyphicon glyphicon-map-marker"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-map-marker</span>
</li>
<li>
  <span class="glyphicon glyphicon-minus"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-minus</span>
</li>
<li>
  <span class="glyphicon glyphicon-minus-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-minus-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-move"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-move</span>
</li>
<li>
  <span class="glyphicon glyphicon-music"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-music</span>
</li>
<li>
  <span class="glyphicon glyphicon-new-window"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-new-window</span>
</li>
<li>
  <span class="glyphicon glyphicon-off"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-off</span>
</li>
<li>
  <span class="glyphicon glyphicon-ok"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-ok</span>
</li>
<li>
  <span class="glyphicon glyphicon-ok-circle"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-ok-circle</span>
</li>
<li>
  <span class="glyphicon glyphicon-ok-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-ok-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-open"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-open</span>
</li>
<li>
  <span class="glyphicon glyphicon-paperclip"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-paperclip</span>
</li>
<li>
  <span class="glyphicon glyphicon-pause"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-pause</span>
</li>
<li>
  <span class="glyphicon glyphicon-pencil"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-pencil</span>
</li>
<li>
  <span class="glyphicon glyphicon-phone"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-phone</span>
</li>
<li>
  <span class="glyphicon glyphicon-phone-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-phone-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-picture"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-picture</span>
</li>
<li>
  <span class="glyphicon glyphicon-plane"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-plane</span>
</li>
<li>
  <span class="glyphicon glyphicon-play"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-play</span>
</li>
<li>
  <span class="glyphicon glyphicon-play-circle"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-play-circle</span>
</li>
<li>
  <span class="glyphicon glyphicon-plus"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-plus</span>
</li>
<li>
  <span class="glyphicon glyphicon-plus-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-plus-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-print"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-print</span>
</li>
<li>
  <span class="glyphicon glyphicon-pushpin"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-pushpin</span>
</li>
<li>
  <span class="glyphicon glyphicon-qrcode"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-qrcode</span>
</li>
<li>
  <span class="glyphicon glyphicon-question-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-question-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-random"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-random</span>
</li>
<li>
  <span class="glyphicon glyphicon-record"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-record</span>
</li>
<li>
  <span class="glyphicon glyphicon-refresh"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-refresh</span>
</li>
<li>
  <span class="glyphicon glyphicon-registration-mark"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-registration-mark</span>
</li>
<li>
  <span class="glyphicon glyphicon-remove"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-remove</span>
</li>
<li>
  <span class="glyphicon glyphicon-remove-circle"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-remove-circle</span>
</li>
<li>
  <span class="glyphicon glyphicon-remove-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-remove-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-repeat"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-repeat</span>
</li>
<li>
  <span class="glyphicon glyphicon-resize-full"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-resize-full</span>
</li>
<li>
  <span class="glyphicon glyphicon-resize-horizontal"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-resize-horizontal</span>
</li>
<li>
  <span class="glyphicon glyphicon-resize-small"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-resize-small</span>
</li>
<li>
  <span class="glyphicon glyphicon-resize-vertical"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-resize-vertical</span>
</li>
<li>
  <span class="glyphicon glyphicon-retweet"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-retweet</span>
</li>
<li>
  <span class="glyphicon glyphicon-road"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-road</span>
</li>
<li>
  <span class="glyphicon glyphicon-save"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-save</span>
</li>
<li>
  <span class="glyphicon glyphicon-saved"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-saved</span>
</li>
<li>
  <span class="glyphicon glyphicon-screenshot"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-screenshot</span>
</li>
<li>
  <span class="glyphicon glyphicon-sd-video"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sd-video</span>
</li>
<li>
  <span class="glyphicon glyphicon-search"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-search</span>
</li>
<li>
  <span class="glyphicon glyphicon-send"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-send</span>
</li>
<li>
  <span class="glyphicon glyphicon-share"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-share</span>
</li>
<li>
  <span class="glyphicon glyphicon-share-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-share-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-shopping-cart"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-shopping-cart</span>
</li>
<li>
  <span class="glyphicon glyphicon-signal"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-signal</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-alphabet"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-alphabet</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-alphabet-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-attributes"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-attributes</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-attributes-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-order"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-order</span>
</li>
<li>
  <span class="glyphicon glyphicon-sort-by-order-alt"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sort-by-order-alt</span>
</li>
<li>
  <span class="glyphicon glyphicon-sound-5-1"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sound-5-1</span>
</li>
<li>
  <span class="glyphicon glyphicon-sound-6-1"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sound-6-1</span>
</li>
<li>
  <span class="glyphicon glyphicon-sound-7-1"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sound-7-1</span>
</li>
<li>
  <span class="glyphicon glyphicon-sound-dolby"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sound-dolby</span>
</li>
<li>
  <span class="glyphicon glyphicon-sound-stereo"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-sound-stereo</span>
</li>
<li>
  <span class="glyphicon glyphicon-star"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-star</span>
</li>
<li>
  <span class="glyphicon glyphicon-star-empty"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-star-empty</span>
</li>
<li>
  <span class="glyphicon glyphicon-stats"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-stats</span>
</li>
<li>
  <span class="glyphicon glyphicon-step-backward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-step-backward</span>
</li>
<li>
  <span class="glyphicon glyphicon-step-forward"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-step-forward</span>
</li>
<li>
  <span class="glyphicon glyphicon-stop"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-stop</span>
</li>
<li>
  <span class="glyphicon glyphicon-subtitles"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-subtitles</span>
</li>
<li>
  <span class="glyphicon glyphicon-tag"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tag</span>
</li>
<li>
  <span class="glyphicon glyphicon-tags"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tags</span>
</li>
<li>
  <span class="glyphicon glyphicon-tasks"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tasks</span>
</li>
<li>
  <span class="glyphicon glyphicon-text-height"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-text-height</span>
</li>
<li>
  <span class="glyphicon glyphicon-text-width"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-text-width</span>
</li>
<li>
  <span class="glyphicon glyphicon-th"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-th</span>
</li>
<li>
  <span class="glyphicon glyphicon-th-large"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-th-large</span>
</li>
<li>
  <span class="glyphicon glyphicon-th-list"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-th-list</span>
</li>
<li>
  <span class="glyphicon glyphicon-thumbs-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-thumbs-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-thumbs-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-thumbs-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-time"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-time</span>
</li>
<li>
  <span class="glyphicon glyphicon-tint"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tint</span>
</li>
<li>
  <span class="glyphicon glyphicon-tower"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tower</span>
</li>
<li>
  <span class="glyphicon glyphicon-transfer"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-transfer</span>
</li>
<li>
  <span class="glyphicon glyphicon-trash"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-trash</span>
</li>
<li>
  <span class="glyphicon glyphicon-tree-conifer"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tree-conifer</span>
</li>
<li>
  <span class="glyphicon glyphicon-tree-deciduous"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-tree-deciduous</span>
</li>
<li>
  <span class="glyphicon glyphicon-unchecked"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-unchecked</span>
</li>
<li>
  <span class="glyphicon glyphicon-upload"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-upload</span>
</li>
<li>
  <span class="glyphicon glyphicon-usd"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-usd</span>
</li>
<li>
  <span class="glyphicon glyphicon-user"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-user</span>
</li>
<li>
  <span class="glyphicon glyphicon-volume-down"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-volume-down</span>
</li>
<li>
  <span class="glyphicon glyphicon-volume-off"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-volume-off</span>
</li>
<li>
  <span class="glyphicon glyphicon-volume-up"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-volume-up</span>
</li>
<li>
  <span class="glyphicon glyphicon-warning-sign"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-warning-sign</span>
</li>
<li>
  <span class="glyphicon glyphicon-wrench"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-wrench</span>
</li>
<li>
  <span class="glyphicon glyphicon-zoom-in"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-zoom-in</span>
</li>
<li>
  <span class="glyphicon glyphicon-zoom-out"></span>
  <span class="glyphicon-class">.glyphicon .glyphicon-zoom-out</span>
</li>
</ul>


<h2 id="glyphicons-how-to-use">How to use</h2>
<p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-search"</span><span class="nt">&gt;&lt;/span&gt;</span>
    </code></pre></div>


<h2 id="glyphicons-examples">Examples</h2>
<p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
<div class="bs-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-left"></span></button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center"></span></button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right"></span></button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-justify"></span></button>
    </div>
  </div>
  <div class="btn-toolbar" role="toolbar">
    <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-star"></span> Star</button>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star"></span> Star</button>
    <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star"></span> Star</button>
    <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star"></span> Star</button>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-star"</span><span class="nt">&gt;&lt;/span&gt;</span> Star
      <span class="nt">&lt;/button&gt;</span>
    </code></pre></div>

</div>


<!-- Dropdowns
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="dropdowns">Dropdowns</h1>
  </div>
  <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

  <h3 id="dropdowns-example">Example</h3>
  <p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
        <li role="presentation" class="divider"></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn dropdown-toggle sr-only"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu1"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
        Dropdown
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="dropdowns-alignment">Alignment options</h3>
  <p>Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu pull-right"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dLabel"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3 id="dropdowns-headers">Headers</h3>
  <p>Add a header to label sections of actions in any dropdown menu.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
        <li role="presentation" class="dropdown-header">Dropdown header</li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
        <li role="presentation" class="divider"></li>
        <li role="presentation" class="dropdown-header">Dropdown header</li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu2"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3 id="dropdowns-disabled">Disabled menu items</h3>
  <p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>
  <div class="bs-example">
    <div class="dropdown clearfix">
      <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu3" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
      </ul>
    </div>
  </div><!-- /example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
</div>



<!-- Button Groups
  ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="btn-groups">Button groups</h1>
</div>
<p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

<div class="bs-callout bs-callout-info">
  <h4>Tooltips &amp; popovers in button groups require special setting</h4>
  <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
</div>

<h3 id="btn-groups-single">Basic example</h3>
<p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
<div class="bs-example">
  <div class="btn-group" style="margin: 9px 0 5px;">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-groups-toolbar">Button toolbar</h3>
<p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
<div class="bs-example">
  <div class="btn-toolbar" role="toolbar" style="margin: 0;">
    <div class="btn-group">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>
      <button type="button" class="btn btn-default">3</button>
      <button type="button" class="btn btn-default">4</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-default">5</button>
      <button type="button" class="btn btn-default">6</button>
      <button type="button" class="btn btn-default">7</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-default">8</button>
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-groups-sizing">Sizing</h3>
<p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>
<div class="bs-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btn-group-sm">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group btn-group-xs">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-xs"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-groups-nested">Nesting</h3>
<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
<div class="bs-example">
  <div class="btn-group">
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>

    <div class="btn-group">
      <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      Dropdown
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-groups-vertical">Vertical variation</h3>
<p>Make a set of buttons appear vertically stacked rather than horizontally.</p>
<div class="bs-example">
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-default">Button</button>
    <button type="button" class="btn btn-default">Button</button>
    <div class="btn-group">
      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <button type="button" class="btn btn-default">Button</button>
    <button type="button" class="btn btn-default">Button</button>
    <div class="btn-group">
      <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <div class="btn-group">
      <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <div class="btn-group">
      <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group-vertical"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-groups-justified">Justified link variation</h3>
<p>Make a group of buttons stretch at the same size to span the entire width of its parent.</p>

<div class="bs-callout bs-callout-warning">
  <h4>Element-specific usage</h4>
  <p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up these styles.</p>
</div>

<div class="bs-example">
  <div class="btn-group btn-group-justified">
    <a class="btn btn-default" role="button">Left</a>
    <a class="btn btn-default" role="button">Middle</a>
    <a class="btn btn-default" role="button">Right</a>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

</div>



<!-- Split button dropdowns
  ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="btn-dropdowns">Button dropdowns</h1>
</div>
<p class="lead">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>

<div class="bs-callout bs-callout-danger">
  <h4>Plugin dependency</h4>
  <p>Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.</p>
</div>

<h3 id="btn-dropdowns-single">Single button dropdowns</h3>
<p>Turn a button into a dropdown toggle with some basic markup changes.</p>
<div class="bs-example">
  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Single button --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-dropdowns-split">Split button dropdowns</h3>
<p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
<div class="bs-example">
  <div class="btn-group">
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Split button --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-dropdowns-sizing">Sizing</h3>
<p>Button dropdowns work with buttons of all sizes.</p>
<div class="bs-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
        Large button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar -->
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
        Small button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar -->
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
        Extra small button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar -->
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Large button group --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- Small button group --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- Extra small button group --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      Extra small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="btn-dropdowns-dropup">Dropup variation</h3>
<p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
<div class="bs-example">
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group dropup">
      <button type="button" class="btn btn-default">Dropup</button>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group dropup">
      <button type="button" class="btn btn-primary">Right dropup</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="dropdown-menu pull-right" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div>
</div><!-- /example -->
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Dropdown menu links --&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

</div>




<!-- Input groups
  ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="input-groups">Input groups</h1>
</div>
<p class="lead">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a <code>.form-control</code>.</p>

<div class="bs-callout bs-callout-danger">
  <h4>Cross-browser compatibility</h4>
  <p>Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers.</p>
</div>
<div class="bs-callout bs-callout-info">
  <h4>Tooltips &amp; popovers in input groups require special setting</h4>
  <p>When using tooltips or popovers on elements within an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
</div>
<div class="bs-callout bs-callout-info">
  <h4>Don't mix with form groups</h4>
  <p>Do not apply input group classes directly to form groups. An input group is an isolated component.</p>
</div>


<h2 id="input-groups-basic">Basic example</h2>
<form class="bs-example bs-example-form" role="form">
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Username">
  </div>
  <br>
  <div class="input-group">
    <input type="text" class="form-control">
    <span class="input-group-addon">.00</span>
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon">$</span>
    <input type="text" class="form-control">
    <span class="input-group-addon">.00</span>
  </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>


<h2 id="input-groups-sizing">Sizing</h2>
<p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
<form class="bs-example bs-example-form" role="form">
  <div class="input-group input-group-lg">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Username">
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Username">
  </div>
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Username">
  </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-lg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-sm"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>


<h2 id="input-groups-checkboxes-radios">Checkboxes and radio addons</h2>
<p>Place any checkbox or radio option within an input group's addon instead of text.</p>
<form class="bs-example bs-example-form">
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox">
            </span>
        <input type="text" class="form-control">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
            <span class="input-group-addon">
              <input type="radio">
            </span>
        <input type="text" class="form-control">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
    </code></pre></div>


<h2 id="input-groups-buttons">Button addons</h2>
<p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>
<form class="bs-example bs-example-form">
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
        <input type="text" class="form-control">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
    </code></pre></div>

<h2 id="input-groups-buttons-dropdowns">Buttons with dropdowns</h2>
<p></p>
<form class="bs-example bs-example-form" role="form">
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <input type="text" class="form-control">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu pull-right"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
      <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
    </code></pre></div>

<h2 id="input-groups-buttons-segmented">Segmented buttons</h2>
<form class="bs-example bs-example-form" role="form">
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default" tabindex="-1">Action</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
        <input type="text" class="form-control">
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default" tabindex="-1">Action</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

</div>



<!-- Navs
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="nav">Navs</h1>
  </div>

  <p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

  <h2 id="nav-tabs">Tabs</h2>
  <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>
  <div class="bs-example">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
  <div class="bs-callout bs-callout-info">
    <h4>Requires JavaScript tabs plugin</h4>
    <p>For tabs with tabbable areas, you must use the <a href="../javascript/#tabs">tabs JavaScript plugin</a>.</p>
  </div>

  <h2 id="nav-pills">Pills</h2>
  <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
  <div class="bs-example">
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
  <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
  <div class="bs-example">
    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h2 id="nav-justified">Justified</h2>
  <p>Easily make tabs or pills equal widths of their parent at screens wider than 768px with <code>.nav-justified</code>. On smaller screens, the nav links are stacked.</p>
  <div class="bs-callout bs-callout-warning">
    <h4>WebKit and responsive justified navs</h4>
    <p>Chrome and Safari both exhibit a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing. This bug is also shown in the <a href="../examples/justified-nav/">justified nav example</a>.</p>
  </div>
  <div class="bs-example">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-justified">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs nav-justified"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-justified"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h2 id="nav-disabled-links">Disabled links</h2>
  <p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

  <div class="bs-callout bs-callout-warning">
    <h4>Link functionality not impacted</h4>
    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
  </div>

  <div class="bs-example">
    <ul class="nav nav-pills">
      <li><a href="#">Clickable link</a></li>
      <li><a href="#">Clickable link</a></li>
      <li class="disabled"><a href="#">Disabled link</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h2 id="nav-dropdowns">Using dropdowns</h2>
  <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

  <h3>Tabs with dropdowns</h3>
  <div class="bs-example">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Help</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3>Pills with dropdowns</h3>
  <div class="bs-example">
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Help</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

</div>






<!-- Breadcrumbs
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="breadcrumbs">Breadcrumbs <small></small></h1>
  </div>
  <p class="lead">Indicate the current page's location within a navigational hierarchy.</p>
  <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
  <div class="bs-example">
    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Library</li>
    </ol>
    <ol class="breadcrumb" style="margin-bottom: 5px;">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ol&gt;</span>
      </code></pre></div>
</div>



<!-- Pagination
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="pagination">Pagination</h1>
  </div>
  <p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.</p>

  <h2 id="pagination-default">Default pagination</h2>
  <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
  <div class="bs-example">
    <ul class="pagination">
      <li><a href="#">«</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3>Disabled and active states</h3>
  <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
  <div class="bs-example">
    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
  <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code> to remove click functionality while retaining intended styles.</p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;span&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;span&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h3>Sizing</h3>
  <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
  <div class="bs-example">
    <div>
      <ul class="pagination pagination-lg">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
    <div>
      <ul class="pagination">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
    <div>
      <ul class="pagination pagination-sm">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h2 id="pagination-pager">Pager</h2>
  <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

  <h3>Default example</h3>
  <p>By default, the pager centers links.</p>
  <div class="bs-example">
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3>Aligned links</h3>
  <p>Alternatively, you can align each link to the sides:</p>
  <div class="bs-example">
    <ul class="pager">
      <li class="previous"><a href="#">← Older</a></li>
      <li class="next"><a href="#">Newer →</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>


  <h3>Optional disabled state</h3>
  <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
  <div class="bs-example">
    <ul class="pager">
      <li class="previous disabled"><a href="#">← Older</a></li>
      <li class="next"><a href="#">Newer →</a></li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
</div>



<!-- Labels
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="labels">Labels</h1>
  </div>
  <p class="lead"></p>

  <h3>Example</h3>
  <div class="bs-example">
    <h1>Example heading <span class="label label-default">New</span></h1>
    <h2>Example heading <span class="label label-default">New</span></h2>
    <h3>Example heading <span class="label label-default">New</span></h3>
    <h4>Example heading <span class="label label-default">New</span></h4>
    <h5>Example heading <span class="label label-default">New</span></h5>
    <h6>Example heading <span class="label label-default">New</span></h6>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
      </code></pre></div>

  <h3>Available variations</h3>
  <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
  <div class="bs-example">
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
      </code></pre></div>

</div>



<!-- Badges
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="badges">Badges</h1>
  </div>
  <p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.</p>

  <div class="bs-example">
    <a href="#">Inbox <span class="badge">42</span></a>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Inbox <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      </code></pre></div>

  <h4>Self collapsing</h4>
  <p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector) provided no content exists within.</p>

  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code> selector.</p>
  </div>

  <h4>Adapts to active nav states</h4>
  <p>Built-in styles are included for placing badges in active states in pill and list navigations.</p>
  <div class="bs-example">
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
      <li class="active">
        <a href="#">
          <span class="badge pull-right">42</span>
          Home
        </a>
      </li>
      <li><a href="#">Profile</a></li>
      <li>
        <a href="#">
          <span class="badge pull-right">3</span>
          Messages
        </a>
      </li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge pull-right"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;</span>
        Home
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        ...
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
</div>



<!-- Jumbotron
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="jumbotron">Jumbotron</h1>
  </div>
  <p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
  <div class="bs-example">
    <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
        <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
  <p>To make the jumbotron full width, and without rounded corners, place it outside all <code>.container</code>s and instead add a <code>.container</code> within.</p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        ...
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

</div>



<!-- Page header
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="page-header">Page header</h1>
  </div>
  <p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>
  <div class="bs-example">
    <div class="page-header">
      <h1>Example page header <small>Subtext for header</small></h1>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>



<!-- Thumbnails
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="thumbnails">Thumbnails</h1>
  </div>
  <p class="lead">Extend Bootstrap's <a href="../css/#grid">grid system</a> with the thumbnail component to easily display grids of images, videos, text, and more.</p>

  <h3 id="thumbnails-default">Default example</h3>
  <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
  <div class="bs-example">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC">
        </a>
      </div>
    </div>
  </div><!-- /.bs-example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-3"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/100%x180"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        ...
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="thumbnails-custom-content">Custom content</h3>
  <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
  <div class="bs-example">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAAI7klEQVR4Xu3bMU8UaxQG4CFEkYIaWmMLHcTEv09BaIydsTYkVNsRQqLem9lkuN9dZ9ldZRbePY8lzsI5z/v5ZnYd9maz2T+dPwQIEAgQ2FNYASkZkQCBuYDCchAIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismKoMSIKCwnAECBGIEFFZMVAYlQEBhOQMECMQIKKyYqAxKgIDCcgYIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismqqcH/fXrV3d9fd3d3d09Xnh8fNydnZ2NvvDz58/dbDZ79mvX5fzx40d3eXnZ/fz58/Ele3t73adPn7rDw8Pfvs1Lz7vuXq6bVkBhTeu7le8+9o9/+MFHR0fdx48fH+cYK7bnuHaTRb9//959+/Zt6UtOT0+7k5OT+d+/hnk32c210woorGl9t/Ldv3792t3c3Mx/1vv377sPHz50Y1/r/779+lAMbYEMr9/02nUXbQuovaPq7/a+fPkyL6h3797NS/bNmzcvPu+6e7luOwIKazvOk/2UtgDaf+htAQwl1F7b3nmNfX2Ta5eVzVg59SU0vBVcvPsb3vYNRXZwcPD4Nvc5550sDN94cgGFNTnxy/yA9jOf4U6qfeu4+PnWcP1Qen1pDMWy6trFO6GhIJfduS0TWSysttxWzbDpvC+Tip/6twIK628FX9nrFz8faj8Pau+ElhXAcHdzf3//+BZt1bX9h+SLd3rn5+fd1dXV/EP19s5vGVdbpsPd1JTzvrLYjLOmgMJaEyrlsvYzqn7m9q3U1AXQfv/+7dzDw8OcrS3NVXdX7fVTz5uSqTn/E1BYO3oaxv6xb6MANnn8YKBvX9PezW1j3h2Nf2fXUlg7G23XLX4mtMnbvE2ubZ+baktmnburZWXVv1Zh7fDh/MPVFNYfwiW8bNsfYo89M/XU51dPlVXvO+V/EiTkZ8bfBRRW+KlY5y5kKI39/f3HxwTaIln1WMOqawfC9vOz/sHP29vb+V+NPXHfllX77Fcbx7JHNp5r3vDoS46vsMJjX7yrGXsYtC2MqR4cbYuz/6D/4uLif78q1H7w3s6w+CzWYhxTzRsee9nxFdYORL/4uVG70uJbsil+1WWdp9eHYnrq14iGudsn4KeYdwciL7uCwtqR6MeKYFu//Nw++7Xsma2euX/r9/bt2yd/j7C/buyXoDf538dNrt2R+MusobDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QL/Ag1TKDpTl19vAAAAAElFTkSuQmCC">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAAI7klEQVR4Xu3bMU8UaxQG4CFEkYIaWmMLHcTEv09BaIydsTYkVNsRQqLem9lkuN9dZ9ldZRbePY8lzsI5z/v5ZnYd9maz2T+dPwQIEAgQ2FNYASkZkQCBuYDCchAIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismKoMSIKCwnAECBGIEFFZMVAYlQEBhOQMECMQIKKyYqAxKgIDCcgYIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismqqcH/fXrV3d9fd3d3d09Xnh8fNydnZ2NvvDz58/dbDZ79mvX5fzx40d3eXnZ/fz58/Ele3t73adPn7rDw8Pfvs1Lz7vuXq6bVkBhTeu7le8+9o9/+MFHR0fdx48fH+cYK7bnuHaTRb9//959+/Zt6UtOT0+7k5OT+d+/hnk32c210woorGl9t/Ldv3792t3c3Mx/1vv377sPHz50Y1/r/779+lAMbYEMr9/02nUXbQuovaPq7/a+fPkyL6h3797NS/bNmzcvPu+6e7luOwIKazvOk/2UtgDaf+htAQwl1F7b3nmNfX2Ta5eVzVg59SU0vBVcvPsb3vYNRXZwcPD4Nvc5550sDN94cgGFNTnxy/yA9jOf4U6qfeu4+PnWcP1Qen1pDMWy6trFO6GhIJfduS0TWSysttxWzbDpvC+Tip/6twIK628FX9nrFz8faj8Pau+ElhXAcHdzf3//+BZt1bX9h+SLd3rn5+fd1dXV/EP19s5vGVdbpsPd1JTzvrLYjLOmgMJaEyrlsvYzqn7m9q3U1AXQfv/+7dzDw8OcrS3NVXdX7fVTz5uSqTn/E1BYO3oaxv6xb6MANnn8YKBvX9PezW1j3h2Nf2fXUlg7G23XLX4mtMnbvE2ubZ+baktmnburZWXVv1Zh7fDh/MPVFNYfwiW8bNsfYo89M/XU51dPlVXvO+V/EiTkZ8bfBRRW+KlY5y5kKI39/f3HxwTaIln1WMOqawfC9vOz/sHP29vb+V+NPXHfllX77Fcbx7JHNp5r3vDoS46vsMJjX7yrGXsYtC2MqR4cbYuz/6D/4uLif78q1H7w3s6w+CzWYhxTzRsee9nxFdYORL/4uVG70uJbsil+1WWdp9eHYnrq14iGudsn4KeYdwciL7uCwtqR6MeKYFu//Nw++7Xsma2euX/r9/bt2yd/j7C/buyXoDf538dNrt2R+MusobDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QL/Ag1TKDpTl19vAAAAAElFTkSuQmCC">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAAI7klEQVR4Xu3bMU8UaxQG4CFEkYIaWmMLHcTEv09BaIydsTYkVNsRQqLem9lkuN9dZ9ldZRbePY8lzsI5z/v5ZnYd9maz2T+dPwQIEAgQ2FNYASkZkQCBuYDCchAIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismKoMSIKCwnAECBGIEFFZMVAYlQEBhOQMECMQIKKyYqAxKgIDCcgYIEIgRUFgxURmUAAGF5QwQIBAjoLBiojIoAQIKyxkgQCBGQGHFRGVQAgQUljNAgECMgMKKicqgBAgoLGeAAIEYAYUVE5VBCRBQWM4AAQIxAgorJiqDEiCgsJwBAgRiBBRWTFQGJUBAYTkDBAjECCismKgMSoCAwnIGCBCIEVBYMVEZlAABheUMECAQI6CwYqIyKAECCssZIEAgRkBhxURlUAIEFJYzQIBAjIDCionKoAQIKCxngACBGAGFFROVQQkQUFjOAAECMQIKKyYqgxIgoLCcAQIEYgQUVkxUBiVAQGE5AwQIxAgorJioDEqAgMJyBggQiBFQWDFRGZQAAYXlDBAgECOgsGKiMigBAgrLGSBAIEZAYcVEZVACBBSWM0CAQIyAwoqJyqAECCgsZ4AAgRgBhRUTlUEJEFBYzgABAjECCismqqcH/fXrV3d9fd3d3d09Xnh8fNydnZ2NvvDz58/dbDZ79mvX5fzx40d3eXnZ/fz58/Ele3t73adPn7rDw8Pfvs1Lz7vuXq6bVkBhTeu7le8+9o9/+MFHR0fdx48fH+cYK7bnuHaTRb9//959+/Zt6UtOT0+7k5OT+d+/hnk32c210woorGl9t/Ldv3792t3c3Mx/1vv377sPHz50Y1/r/779+lAMbYEMr9/02nUXbQuovaPq7/a+fPkyL6h3797NS/bNmzcvPu+6e7luOwIKazvOk/2UtgDaf+htAQwl1F7b3nmNfX2Ta5eVzVg59SU0vBVcvPsb3vYNRXZwcPD4Nvc5550sDN94cgGFNTnxy/yA9jOf4U6qfeu4+PnWcP1Qen1pDMWy6trFO6GhIJfduS0TWSysttxWzbDpvC+Tip/6twIK628FX9nrFz8faj8Pau+ElhXAcHdzf3//+BZt1bX9h+SLd3rn5+fd1dXV/EP19s5vGVdbpsPd1JTzvrLYjLOmgMJaEyrlsvYzqn7m9q3U1AXQfv/+7dzDw8OcrS3NVXdX7fVTz5uSqTn/E1BYO3oaxv6xb6MANnn8YKBvX9PezW1j3h2Nf2fXUlg7G23XLX4mtMnbvE2ubZ+baktmnburZWXVv1Zh7fDh/MPVFNYfwiW8bNsfYo89M/XU51dPlVXvO+V/EiTkZ8bfBRRW+KlY5y5kKI39/f3HxwTaIln1WMOqawfC9vOz/sHP29vb+V+NPXHfllX77Fcbx7JHNp5r3vDoS46vsMJjX7yrGXsYtC2MqR4cbYuz/6D/4uLif78q1H7w3s6w+CzWYhxTzRsee9nxFdYORL/4uVG70uJbsil+1WWdp9eHYnrq14iGudsn4KeYdwciL7uCwtqR6MeKYFu//Nw++7Xsma2euX/r9/bt2yd/j7C/buyXoDf538dNrt2R+MusobDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QIKKz9DGxAoI6CwykRtUQL5AgorP0MbECgjoLDKRG1RAvkCCis/QxsQKCOgsMpEbVEC+QL/Ag1TKDpTl19vAAAAAElFTkSuQmCC">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.bs-example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/300x200"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"caption"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h3&gt;</span>Thumbnail label<span class="nt">&lt;/h3&gt;</span>
        <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>




<!-- Alerts
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="alerts">Alerts</h1>
  </div>
  <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. For inline dismissal, use the <a href="../javascript/#alerts">alerts jQuery plugin</a>.</p>

  <h2 id="alerts-examples">Examples</h2>
  <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

  <div class="bs-callout bs-callout-info">
    <h4>No default class</h4>
    <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
  </div>

  <div class="bs-example">
    <div class="alert alert-success">
      <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info">
      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning">
      <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    <div class="alert alert-danger">
      <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h2 id="alerts-dismissable">Dismissable alerts</h2>
  <p>Build on any alert by adding an optional <code>.alert-dismissable</code> and close button.</p>
  <div class="bs-example">
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissable"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Best check yo self, you're not looking too good.
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <div class="bs-callout bs-callout-warning">
    <h4>Ensure proper behavior across all devices</h4>
    <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
  </div>

  <h2 id="alerts-links">Links in alerts</h2>
  <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
  <div class="bs-example">
    <div class="alert alert-success">
      <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
    </div>
    <div class="alert alert-info">
      <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
    </div>
    <div class="alert alert-warning">
      <strong>Warning!</strong> Best check yo self, you're <a href="#" class="alert-link">not looking too good</a>.
    </div>
    <div class="alert alert-danger">
      <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>




<!-- Progress bars
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="progress">Progress bars</h1>
  </div>
  <p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
  </div>

  <h3 id="progress-basic">Basic example</h3>
  <p>Default progress bar.</p>
  <div class="bs-example">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <span class="sr-only">60% Complete</span>
      </div>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="progress-alternatives">Contextual alternatives</h3>
  <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
  <div class="bs-example">
    <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        <span class="sr-only">60% Complete (warning)</span>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        <span class="sr-only">80% Complete (danger)</span>
      </div>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="progress-striped">Striped</h3>
  <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
  <div class="bs-example">
    <div class="progress progress-striped">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
    <div class="progress progress-striped">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <div class="progress progress-striped">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        <span class="sr-only">60% Complete (warning)</span>
      </div>
    </div>
    <div class="progress progress-striped">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        <span class="sr-only">80% Complete (danger)</span>
      </div>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete (danger)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="progress-animated">Animated</h3>
  <p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
  <div class="bs-example">
    <div class="progress progress-striped active">
      <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"><span class="sr-only">45% Complete</span></div>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span>  <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"45"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 45%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>45% Complete<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="progress-stacked">Stacked</h3>
  <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
  <div class="bs-example">
    <div class="progress">
      <div class="progress-bar progress-bar-success" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <div class="progress-bar progress-bar-warning" style="width: 20%">
        <span class="sr-only">20% Complete (warning)</span>
      </div>
      <div class="progress-bar progress-bar-danger" style="width: 10%">
        <span class="sr-only">10% Complete (danger)</span>
      </div>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">style=</span><span class="s">"width: 35%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>35% Complete (success)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete (warning)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">style=</span><span class="s">"width: 10%"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>10% Complete (danger)<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>




<!-- Media object
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="media">Media object</h1>
  </div>
  <p class="lead">Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.</p>

  <h3 id="media-default">Default media</h3>
  <p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>
  <div class="bs-example">
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.bs-example -->
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
        ...
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="media-list">Media list</h3>
  <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
  <div class="bs-example">
    <ul class="media-list">
      <li class="media">
        <a class="pull-left" href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
          <!-- Nested media object -->
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              <!-- Nested media object -->
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Nested media heading</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
              </div>
            </div>
          </div>
          <!-- Nested media object -->
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </div>
      </li>
      <li class="media">
        <a class="pull-right" href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
      </li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
        ...
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>
</div>



<!-- List group
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="list-group">List group</h1>
  </div>
  <p class="lead">List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

  <h3 id="list-group-basic">Basic example</h3>
  <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
  <div class="bs-example">
    <ul class="list-group">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3 id="list-group-badges">Badges</h3>
  <p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>
  <div class="bs-example">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
    </ul>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
        Cras justo odio
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      </code></pre></div>

  <h3 id="list-group-linked">Linked items</h3>
  <p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
  <div class="bs-example">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
        Cras justo odio
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <h3 id="list-group-custom-content">Custom content</h3>
  <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
  <div class="bs-example">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>




<!-- Panels
  ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
  <h1 id="panels">Panels</h1>
</div>
<p class="lead">While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</p>

<h3 id="panels-basic">Basic example</h3>
<p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <div class="panel-body">
      Basic panel example
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      Basic panel example
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="panels-heading">Panel with heading</h3>
<p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <div class="panel-heading">Panel heading without title</div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading without title<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      Panel content
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      Panel content
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="panels-footer">Panel with footer</h3>
<p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <div class="panel-body">
      Panel content
    </div>
    <div class="panel-footer">Panel footer</div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      Panel content
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-footer"</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="panels-alternatives">Contextual alternatives</h3>
<p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
<div class="bs-example">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<h3 id="panels-tables">With tables</h3>
<p>Add any non-bordered <code>.table</code> within a panel for a seamless design. If there is a <code>.panel-body</code>, we add an extra border to the top of the table for separation.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <!-- Table -->
    <table class="table">
      <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Default panel contents --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- Table --&gt;</span>
      <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

<p>If there is no panel body, the component moves from panel header to table without interruption.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>

    <!-- Table -->
    <table class="table">
      <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Default panel contents --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- Table --&gt;</span>
      <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
      ...
      <span class="nt">&lt;/table&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>



<h3 id="panels-list-group">With list groups</h3>
<p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>
<div class="bs-example">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <!-- List group -->
    <ul class="list-group">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Default panel contents --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- List group --&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    </code></pre></div>

</div>





<!-- Wells
  ================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <h1 id="wells">Wells</h1>
  </div>

  <h3>Default well</h3>
  <p>Use the well as a simple effect on an element to give it an inset effect.</p>
  <div class="bs-example">
    <div class="well">
      Look, I'm in a well!
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
  <h3>Optional classes</h3>
  <p>Control padding and rounded corners with two optional modifier classes.</p>
  <div class="bs-example">
    <div class="well well-lg">
      Look, I'm in a large well!
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      </code></pre></div>

  <div class="bs-example">
    <div class="well well-sm">
      Look, I'm in a small well!
    </div>
  </div>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      </code></pre></div>
</div>

</div>
<!-- /#content -->

<?php get_footer(); ?>