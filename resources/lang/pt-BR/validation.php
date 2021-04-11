<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'aceito' => 'O: atributo deve ser aceito.',
    'active_url' => 'O: attribute não é um URL válido.',
    'after' => 'O: attribute deve ser uma data após: date.',
    'after_or_equal' => 'O: attribute deve ser uma data posterior ou igual a: date.',
    'alpha' => 'O: attribute deve conter apenas letras.',
    'alpha_dash' => 'O: attribute deve conter apenas letras, números, travessões e sublinhados.',
    'alpha_num' => 'O: attribute deve conter apenas letras e números.',
    'array' => 'O: attribute deve ser um array.',
    'before' => 'O: attribute deve ser uma data antes de: date.',
    'before_or_equal' => 'O: attribute deve ser uma data anterior ou igual a: date.',
    'entre' => [
        'numeric' => 'O: attribute deve estar entre: min e: max.',
        'file' => 'O: attribute deve estar entre: min e: max kilobytes.',
        'string' => 'O: attribute deve ter entre: min e: max caracteres.',
        'array' => 'O: attribute deve ter entre: min e: max itens.',
    ],
    'boolean' => 'O campo: attribute deve ser verdadeiro ou falso.',
    'confirmado' => 'A: confirmação do atributo não corresponde.',
    'date' => 'O: attribute não é uma data válida.',
    'date_equals' => 'O: attribute deve ser uma data igual a: date.',
    'date_format' => 'O: attribute não corresponde ao formato: format.',
    'different' => 'O: attribute e: other devem ser diferentes.',
    'digits' => 'O: attribute deve ser: digits digits.',
    'digits_between' => 'O: attribute deve estar entre: min e: max dígitos.',
    'dimensões' => 'O: attribute tem dimensões de imagem inválidas.',
    'distinto' => 'O campo: attribute tem um valor duplicado.',
    'email' => 'O: attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O: attribute deve terminar com um dos seguintes:: values.',
    'existe' => 'O atributo selecionado é inválido.',
    'file' => 'O: attribute deve ser um arquivo.',
    'preenchido' => 'O campo: attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O: attribute deve ser maior que: value.',
        'file' => 'O: attribute deve ser maior que: value kilobytes.',
        'string' => 'O: attribute deve ser maior que: caracteres de valor.',
        'array' => 'O: attribute deve ter mais do que: itens de valor.',
    ],
    'gte' => [
        'numeric' => 'O: attribute deve ser maior ou igual a: value.',
        'file' => 'O: attribute deve ser maior ou igual: value kilobytes.',
        'string' => 'O: attribute deve ser maior ou igual a caracteres de valor.',
        'array' => 'O: attribute deve ter: itens de valor ou mais.',
    ],
    'image' => 'O: attribute deve ser uma imagem.',
    'in' => 'O atributo selecionado é inválido.',
    'in_array' => 'O campo: attribute não existe em: other.',
    'integer' => 'O: attribute deve ser um inteiro.',
    'ip' => 'O: attribute deve ser um endereço IP válido.',
    'ipv4' => 'O: attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O: attribute deve ser um endereço IPv6 válido.',
    'json' => 'O: attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O: attribute deve ser menor que: value.',
        'file' => 'O: attribute deve ser menor que: value kilobytes.',
        'string' => 'O: attribute deve ter menos que: caracteres de valor.',
        'array' => 'O: attribute deve ter menos que: itens de valor.',
    ],
    'lte' => [
        'numeric' => 'O: attribute deve ser menor ou igual a: value.',
        'arquivo' => 'O: atributo deve ser menor ou igual: valor kilobytes.',
        'string' => 'O: atributo deve ser menor ou igual a caracteres de valor.',
        'array' => 'O: atributo não deve ter mais do que: itens de valor.',
    ],
    'max' => [
        'numeric' => 'O: attribute não deve ser maior que: max.',
        'file' => 'O: attribute não deve ser maior que: max kilobytes.',
        'string' => 'O: attribute não deve ser maior que: max caracteres.',
        'array' => 'O: attribute não deve ter mais do que: max itens.',
    ],
    'mimes' => 'O: attribute deve ser um arquivo do tipo:: values.',
    'mimetypes' => 'O: attribute deve ser um arquivo do tipo:: values.',
    'min' => [
        'numeric' => 'O: attribute deve ser pelo menos: min.',
        'file' => 'O: attribute deve ter pelo menos: min kilobytes.',
        'string' => 'O: attribute deve ter pelo menos: min caracteres.',
        'array' => 'O: attribute deve ter pelo menos: itens min.',
    ],
    'multiple_of' => 'O: attribute deve ser um múltiplo de: value.',
    'not_in' => 'O atributo selecionado é inválido.',
    'not_regex' => 'O formato de: attribute é inválido.',
    'numeric' => 'O: attribute deve ser um número.',
    'senha' => 'A senha está incorreta.',
    'present' => 'O campo: attribute deve estar presente.',
    'regex' => 'O formato de: attribute é inválido.',
    'obrigatório' => 'O campo: attribute é obrigatório.',
    'required_if' => 'O campo: attribute é obrigatório quando: other for: value.',
    'required_unless' => 'O campo: attribute é obrigatório, a menos que: other esteja em: values.',
    'required_with' => 'O campo: attribute é obrigatório quando: values ​​estiver presente.',
    'required_with_all' => 'O campo: attribute é obrigatório quando: os valores estão presentes.',
    'required_without' => 'O campo: attribute é obrigatório quando: values ​​não estiver presente.',
    'required_without_all' => 'O campo: attribute é obrigatório quando nenhum dos: valores estão presentes.',
    'proibido' => 'O campo: attribute é proibido.',
    'forbidden_if' => 'O campo: attribute é proibido quando: other for: value.',
    'forbidden_unless' => 'O campo: attribute é proibido, a menos que: other esteja em: values.',
    'same' => 'O: attribute e: other devem corresponder.',
    'tamanho' => [
        'numeric' => 'O: attribute deve ser: size.',
        'file' => 'O: attribute deve ter: size kilobytes.',
        'string' => 'O: attribute deve ter: caracteres de tamanho.',
        'array' => 'O: attribute deve conter: itens de tamanho.',
    ],
    'starts_with' => 'O: attribute deve começar com um dos seguintes:: values.',
    'string' => 'O: attribute deve ser uma string.',
    'timezone' => 'O: attribute deve ser uma zona válida.',
    'unique' => 'O: attribute já foi usado.',
    'enviado' => 'O: attribute falhou ao carregar.',
    'url' => 'O formato de: attribute é inválido.',
    'uuid' => 'O: attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

   
'custom' => [
    'nome do atributo' => [
        'regra-nome' => 'mensagem personalizada',
    ],
],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'atributos' => [],

];
