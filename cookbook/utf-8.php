<?php
// UTF-8 Usages
// @author Kolier.Li

// @link https://en.wikipedia.org/wiki/UTF-8
// @link https://en.wikipedia.org/wiki/List_of_Unicode_characters

// Set multi-byte encoding
mb_regex_encoding( 'utf-8' );

// =============================================================================
// Character Ranges
// =============================================================================

// ASCII
//   - DEC: 0-127
//   - HEX: 0000-007F

// CJK - Chinese, Japanese, Korean
// @link https://en.wikipedia.org/wiki/UTF-8
//   - HEX: 0800-3FFFF
// @link https://en.wikipedia.org/wiki/CJK_Unified_Ideographs
// @link http://stackoverflow.com/questions/1366068/whats-the-complete-range-for-chinese-characters-in-unicode
//   - HEX-1: 4E00-9FCC
//   - HEX-2: 3400-4DB5
//   - HEX-3: 20000-2A6D6
//   - HEX-4: 2A700-2B734
//   - HEX-5: 2B740-2B81D
//   - HEX-6: Not released

