//first name validation
(/^\s*[A-Z][a-z]{1,}([A-Z][a-z]{1,})?(([-\s][A-Z][a-z]{1,})|([A-Z][a-z]{1,}))?\s*$/g)

//middle initial validation
(/^\s*[A-Z]([.])?\s*$/g)

//last name validation
(/^\s*(([A-Z][a-z]{1,})([-][A-Z][a-z]{1,})?.*(\s+[A-Z][a-z]{1,})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/g)

//full name validation
(/^\s*([A-Z][a-z]{1,}|[A-Z][a-z]{1,}([A-Z][a-z])?)([A-Z][a-z]{1,})?(([-\s][A-Z][a-z]{1,})|([A-Z][a-z]{1,}))?\s*([A-Z]([.])?)?\s*(([A-Z][a-z]{1,})[-][A-Z][a-z]{1,}?.*(\s+[A-Z][a-z]{1,10})?|([A-Z][a-z'][a-zA-Z][a-z]{1,}))\s*$/g)

//full date validation (mm/dd/yyyy OR mm-dd-yyyy - days: 1-31 per month; years: 1910-2019)
(/^\s*((([0])?[1-9])|([1][0-2]))[-\/]((([0-2])?[1-9])|([3][0-1]))[-\/](([1][9][1-9][0-9])|([2][0][0-1][0-9]))\s*$/g)
//years: 1950-2014
(/^\s*((([0])?[1-9])|([1][0-2]))[-\/]((([0-2])?[1-9])|([3][0-1]))[-\/](([1][9][5-9][0-9])|([2][0]{2}[0-9])|([2][0][1][0-4]))\s*$/g)
//years: 1910-2014
(/^\s*((([0])?[1-9])|([1][0-2]))[-\/]((([0-2])?[1-9])|([3][0-1]))[-\/](([1][9][1-9][0-9])|([2][0]{2}[0-9])|([2][0][1][0-4]))\s*$/g)

//VIN number validation (no I, O, or Q)
(/^\s*[A-HJ-NPR-Za-hj-npr-z0-9]{17}\s*$/g)

//picture file name validation
(/^\s*([A-Za-z0-9\s])*[\.](?i)(tif|gif|png|jpg|jpeg|bmp)\s*$/g)
// (?i) -> ignores case-sensitivity

//ip address validate
(/^\s*(((([0-1])?([0-9])?[0-9])|([2][0-4][0-9])|([2][5][0-5]))[.]){3}((([0-1])?([0-9])?[0-9])|([2][0-4][0-9])|([2][5][0-5]))\s*$/g)

// 0-255
(/^\s*((([0-1])?([0-9])?[0-9])|([2][0-5]{2}))\s*$/g)

//password validation (min=6, max=20; must contain at least 1 number, 1 upper, 1 lower, and 1 symbol -> !@#$%&*_-)
(/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%&*_-]).{6,20})/g)
// ?=.* -> checks entire data for one to multiple instances
	
//street type validation
(/^\s*(st|St|Street|street|dr|Dr|Drive|drive|rd|Rd|Road|road|blvd|Blvd|Boulevard|boulevard|pl|Pl|Place|place|ct|Ct|Court|court|cir|Cir|Circle|circle|hwy|Hwy|Highway|highway|ave|Ave|Avenue|avenue|ln|Ln|Lane|lane)([\.])?\s*$/g)
	
//full street address validation
(/^\s*([1-9]|[1-9][0-9]|[1-9][0-9]{2,9})\s+[A-Z][a-z]{1,15}.*(\s+[A-Z][a-z]{1,15})?\s+[A-Z][a-z]{1,10}([.])?\s*$/g)

// city validation
(/^\s*[A-Za-z\s]+\s*$/g)

//state validation
(/^\s*[A-Z]{2}\s*$/g)

//zipcode validation
(/^\s*\d{5}([-\s]\d{4})?\s*$/g)

//username validation
(/^(([a-zA-Z]{1,15})([-][A-Z][a-z]{1,15})?.*(\s+[A-Z][a-z]{1,10})?|([A-Z][a-z'][a-zA-Z][a-z]{1,15}))$/g)

//simple email validation
(/^\s*((.*\d)?(.*[a-z])?.{1,20})[@][a-z]{1,15}[.][a-z]{2,4}([.][a-z]{2,4})?\s*$/g)

//complete US phone number validation
(/^\s*([(\s])?(([2][0][1-9])|([2][1-9][0-9])|([3-8][0-9][0-9])|([9][0-8][0-9]))([-\s|)\s])?(\s)?([2-9][0-9]{2})([-\s])?([0-9]{4})\s*$/g)

//US area code validation
(/^\s*(([2][0][1-9])|([2][1-9][0-9])|([3-8][0-9][0-9])|([9][0-8][0-9]))\s*$/g)

//US phone number only validation
(/^\s*([2-9][0-9]{2})[-\/]?([0-9]{4})\s*$/g)
