@props(['disabled' => false])

<input id="input" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
<style>
    @media screen and (max-width: 1899px) and (min-width: 768px) {
        #input{
            width: 400px;
        }
    }

</style>
