<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         kernel
 * @subpackage      Xoops Mailer Local Language
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: xoopsmailerlocal.php 12537 2014-05-19 14:19:33Z beckmi $
 */
/**
/**
 *
 *
 * @version         $Id: xoopsmailerlocal.php 12537 2014-05-19 14:19:33Z beckmi $
 */
// Do not change the class name
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Constructer
     *
     * @return XoopsMailerLocal
     */
    function XoopsMailerLocal()
    {
        $this->XoopsMailer();
        // It is supposed no need to change the charset
        $this->charSet = strtolower(_CHARSET);

{
        $this->multimailer->SetLanguage("en");
    }
    // Multibyte languages are encouraged to make their proper method for encoding FromName
    }
     * @param $text
     * Constructer
     * @return mixed
     * @return XoopsMailerLocal
    function encodeFromName($text)
    {
        // Activate the following line if needed
        $this->charSet = strtolower(_CHARSET);


{
    }
    }
    // Multibyte languages are encouraged to make their proper method for encoding FromName
    }
     * @param $text
     * Constructer
     */
     * @return XoopsMailerLocal
    function encodeFromName($text)
    {
        // Activate the following line if needed
        $this->charSet = strtolower(_CHARSET);
    }