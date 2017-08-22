@component('mail::message')
# Introduction

## Welcome to San Diego Laravel User Group

Consectetur molestiae impedit excepturi quas nemo Labore aperiam ipsam aut consequuntur in Tempore minima sint quae quo ab Voluptas quo quo aspernatur magni cumque? Enim sit aut esse lorem a

Adipisicing elit eaque dolor rerum voluptatum nobis explicabo Harum provident magnam iusto reiciendis dolore, facilis incidunt aperiam quo? Alias ullam pariatur illo harum voluptates tempore Voluptatum accusamus deserunt sit ut!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
