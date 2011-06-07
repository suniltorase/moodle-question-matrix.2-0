<?php
//
//class MatrixFormRenderer extends HTML_QuickForm_Renderer_Tableless{
//
////    function renderElement(&$element, $required, $error)
////    {
////        // if the element name indicates the end of a fieldset, close the fieldset
////        if (   in_array($element->getName(), $this->_stopFieldsetElements)
////            && $this->_fieldsetsOpen > 0
////           ) {
////            $this->_html .= $this->_closeFieldsetTemplate;
////            $this->_fieldsetsOpen--;
////        }
////        // if no fieldset was opened, we need to open a hidden one here to get
////        // XHTML validity
////        if ($this->_fieldsetsOpen === 0) {
////            $this->_html .= $this->_openHiddenFieldsetTemplate;
////            $this->_fieldsetsOpen++;
////        }
////        if (!$this->_inGroup) {
////            $html = $this->_prepareTemplate($element->getName(), $element->getLabel(), $required, $error);
////            // the following lines (until the "elseif") were changed / added
////            // compared to the default renderer
////            $element_html = $element->toHtml();
////            if (!is_null($element->getAttribute('id'))) {
////                $id = $element->getAttribute('id');
////            } else {
////                $id = $element->getName();
////            }
////            if (!empty($id) and !$element->isFrozen() and !is_a($element, 'MoodleQuickForm_group') and !is_a($element, 'HTML_QuickForm_static')) { // moodle hack
////                $html = str_replace('<label', '<label for="' . $id . '"', $html);
////                $element_html = preg_replace('#name="' . $id . '#',
////                                             'id="' . $id . '" name="' . $id . '',
////                                             $element_html,
////                                             1);
////            }
////            $this->_html .= str_replace('{element}', $element_html, $html);
////        } elseif (!empty($this->_groupElementTemplate)) {
////            $html = str_replace('{label}', $element->getLabel(), $this->_groupElementTemplate);
////            if ($required) {
////                $html = str_replace('<!-- BEGIN required -->', '', $html);
////                $html = str_replace('<!-- END required -->', '', $html);
////            } else {
////                $html = preg_replace("/([ \t\n\r]*)?<!-- BEGIN required -->(\s|\S)*<!-- END required -->([ \t\n\r]*)?/i", '', $html);
////            }
////            $this->_groupElements[] = str_replace('{element}', $element->toHtml(), $html);
////
////        } else {
////            $this->_groupElements[] = $element->toHtml();
////        }
////    } // end func renderElement
//}
//
?>
