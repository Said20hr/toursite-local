@props(['locale'])

@switch($locale)
    @case('fr')
        <img src="https://flagcdn.com/16x12/fr.png" srcset="https://flagcdn.com/32x24/fr.png 2x,https://flagcdn.com/48x36/fr.png 3x" width="20" height="18" alt="France">
        <span>{{ __('Français') }}</span>
        @break
    @case('ru')
        <img src="https://flagcdn.com/16x12/ru.png" srcset="https://flagcdn.com/32x24/ru.png 2x,https://flagcdn.com/48x36/ru.png 3x" width="20" height="18" alt="Russia">
        <span>{{ __('Русский') }}</span>
        @break
    @case('gr')
        <img src="https://flagcdn.com/16x12/gr.png" srcset="https://flagcdn.com/32x24/gr.png 2x,https://flagcdn.com/48x36/gr.png 3x" width="20" height="18" alt="Greece">
        <span>{{ __('Ελληνικά') }}</span>
        @break
    @case('sj')
        <img src="https://flagcdn.com/16x12/no.png" srcset="https://flagcdn.com/32x24/no.png 2x,https://flagcdn.com/48x36/no.png 3x" width="20" height="18" alt="Norwegian">
        <span>{{ __('Norwegian') }}</span>
        @break
    @case('it')
        <img src="https://flagcdn.com/16x12/it.png" srcset="https://flagcdn.com/32x24/it.png 2x,https://flagcdn.com/48x36/it.png 3x" width="20" height="18" alt="Italy">
        <span>{{ __('Italian') }}</span>
        @break
    @case('es')
        <img src="https://flagcdn.com/16x12/es.png" srcset="https://flagcdn.com/32x24/es.png 2x,https://flagcdn.com/48x36/es.png 3x" width="20" height="18" alt="Spain">
        <span>{{ __('Spanish') }}</span>
        @break
    @case('ar')
        <img src="https://flagcdn.com/16x12/sa.png" srcset="https://flagcdn.com/32x24/sa.png 2x,https://flagcdn.com/48x36/sa.png 3x" width="20" height="18" alt="Saudi Arabia">
        <span>{{ __('Arabic') }}</span>
        @break
    @default
        <img src="https://flagcdn.com/16x12/gb.png" srcset="https://flagcdn.com/32x24/gb.png 2x,https://flagcdn.com/48x36/gb.png 3x" width="20" height="18" alt="UK">
        <span>{{ __('English') }}</span>
@endswitch
