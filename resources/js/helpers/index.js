export function getLocaleVersion(data, locale) {
    const defaultLocale = 'sk'

    let res = data.filter((i) => i.language === locale)[0]

    // if we don't have a locale version, use default locale
    if(!res) {
        res = data.filter((i) => i.language === defaultLocale)[0]
    }

    // if we don't have a version for default locale, return first element
    if(!res) {
        res = data[0]
    }

    return res
}
