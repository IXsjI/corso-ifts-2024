import { registerBlockType } from '@wordpress/blocks';
import {
    InspectorControls,
    BlockControls,
    AlignmentToolbar,
    RichText,
    useBlockProps
} from '@wordpress/block-editor';
import {
    PanelBody,
    TextControl,
    ToolbarButton,
    ToolbarGroup,
    RangeControl,
    ToggleControl,
    ToolbarDropdownMenu
} from '@wordpress/components';

import json from '../block.json';
const { name, title, description } = json;

registerBlockType(name, {
    title: title,
    description: description,

    attributes: {
        blockId: {
            type: "string"
        },
        alignment: {
            type: "string",
            default: "left"
        },
        bottom: {
            type: "number",
            default: 0
        },
        content: {
            type: "string"
        },
        hideOnTop: {
            type: "boolean",
            default: false
        }
    },
    edit: (props) => {
        props.setAttributes({ blockId: props.clientId });

        const blockProps = useBlockProps();

        const onChangeAlignment = (value) => {
            props.setAttributes({ alignment: value });
        }

        const onChangeHideOnTop = () => {
            props.setAttributes({
                hideOnTop: !props.attributes.hideOnTop
            })
        }
        return <>
            <InspectorControls
                key='settings'
                group='settings'
            >
                <PanelBody
                    title="Base"
                    initialOpen={true}
                >

                    <TextControl
                        label="Testo del pulsante"
                        help="Inserisci il conenuto del pulsante torna su"
                        value={props.attributes.content}
                        onChange={(content) => props.setAttributes({ content })}
                    />
                    <RangeControl
                        label="Scostamento dal bordo inferiore"
                        help="Valore in pixel del margine inferiore"
                        value={props.attributes.bottom}
                        onChange={(bottom) => props.setAttributes({ bottom })}
                        min="0"
                        max="100"
                        step="5"
                    />
                    <ToggleControl
                        label="Nascondi in alto"
                        onChange={onChangeHideOnTop}
                        checked={props.attributes.hideOnTop}
                    />
                </PanelBody>
            </InspectorControls>

            <InspectorControls
                key='styles'
                group='styles'
            >

            </InspectorControls>

            <BlockControls key='controls'>
                <ToolbarGroup>
                    <AlignmentToolbar
                        label="Allineamento"
                        value={props.attributes.alignment}
                        onChange={onChangeAlignment}
                    />

                    <ToolbarDropdownMenu
                        label="Allineamento"
                        icon="menu-alt"
                        controls={[
                            {
                                title: "left",
                                icon: "align-left",
                                onClick: () => onChangeAlignment('left'),
                                isActive: (props.attributes.alignment == 'left')
                            },
                            {
                                title: "center",
                                icon: "align-center",
                                onClick: () => onChangeAlignment('center'),
                                isActive: (props.attributes.alignment == 'center')
                            },
                            {
                                title: "right",
                                icon: "align-right",
                                onClick: () => onChangeAlignment('right'),
                                isActive: (props.attributes.alignment == 'right')
                            }
                        ]}
                    />

                    <ToolbarButton
                        label="Nascondi in alto"
                        value={props.attributes.hideOnTop}
                        onClick={onChangeHideOnTop}
                        isPressed={props.attributes.hideOnTop}
                        icon={(props.attributes.hideOnTop) ? 'hidden' : 'visibility'}
                    />
                </ToolbarGroup>

            </BlockControls>
            <RichText
                {...blockProps}
                tagName="span"
                value={props.attributes.content}
                onChange={(content) => props.setAttributes({ content })}
                placeholder="Es. Torna Su"
            />
        </>;
    },
    save: (props) => {
        const blockProps = useBlockProps.save({
            id: props.attributes.blockId,
            className: "align-" + props.attributes.alignment + ((props.attributes.hideOnTop) ? ' hidden' : ''),
            'data-hideontop': props.attributes.hideOnTop

        }
        );



        return <>
            <style>{"#block-" + props.attributes.blockId + " { bottom: " + props.attributes.bottom + "px; }"}</style>
            <a {...blockProps} href="#">
                <RichText.Content tagName="span" value={props.attributes.content} />
            </a>
        </>

    }
});