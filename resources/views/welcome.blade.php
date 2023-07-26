<x-layout>
  <x-slot name="title">
	  Home | Example Website
  </x-slot>
  <div>
  <!-- From the section "How To Extend the Layout": -->
	<h1>Hello World!</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Hic, aut?</p>
    <button class="btn">Get Started</button>
  </div>
  <!-- From the section "How To Include Backend Data": -->
  <p>{{ json_encode($todos) }}</p>
  <!-- From the section "How To Use Control Shortcuts": -->
  <ul>
    @foreach ($todos as $todo)
      <li>{{ $todo }}</li>
    @endforeach
  </ul> 
  @if (count($todos) === 1)
    <p>I have one task!</p>
  @elseif (count($todos) > 1)
    <p>I have multiple tasks!</p>
  @else
    <p>I don't have any tasks!</p>
  @endif
  <!-- From the section "How To Make a Custom Extension": -->
  <div>
    @truncate('Lorem ipsum dolor sit amet', 10)
  </div>
</x-layout>
