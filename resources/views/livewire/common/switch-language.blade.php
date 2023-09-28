<div>
    {{ $selectedLanguage }}
    <select name="selectedLang" id="selectedLang" wire:model="selectedLanguage" wire:change="changeToSelecetedLanguage">
        @foreach($languageArray as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
